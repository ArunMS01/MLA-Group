<?php
/**
 * EnquiryAnalyzer
 * Uses OpenRouter (GPT-based) to classify a single enquiry message.
 *
 * Usage:
 *   $analyzer = new EnquiryAnalyzer('YOUR_OPENROUTER_KEY', $productsArray);
 *   $result = $analyzer->analyze($message);
 *   // $result => ['type'=>'real|spam|job|other', 'product'=> 'Calcium Stearate'|null, 'confidence'=>0.0-1.0, 'raw'=>...]
 */

class EnquiryAnalyzer
{
    private $apiKey;
    private $model;
    private $products = [];
    private $apiEndpoint = "https://openrouter.ai/api/v1/chat/completions";
    private $timeout = 20; // seconds
    private $maxRetries = 1;

    public function __construct(string $apiKey, array $products = [], string $model = 'meta-llama/llama-3.3-70b-instruct:free')
    {
        if (empty($apiKey)) {
            throw new InvalidArgumentException("OpenRouter API key required.");
        }
        $this->apiKey = $apiKey;
        $this->products = $products;
        $this->model = $model;
    }

    /**
     * Analyze a single message and return structured result.
     *
     * @param string $message
     * @return array ['type'=>..., 'product'=>..., 'confidence'=>float, 'raw'=>string]
     */
    public function analyze(string $message): array
    {
        $message = trim($message);
        if ($message === '') {
            return $this->fallbackResult('other', null, 0.0, 'empty_message');
        }

        // Build prompt with product list (explicit)
        $productList = !empty($this->products) ? implode(", ", $this->products) : "No product list provided";
        $prompt = $this->buildPrompt($message, $productList);

        // Call OpenRouter
        $payload = [
            "model" => $this->model,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ],
            "temperature" => 0.0,
            "max_tokens" => 400
        ];

        $responseText = $this->callApi($payload);

        if ($responseText === null) {
            // API failure -> fallback local classification
            return $this->localFallback($message);
        }

        // Try to parse JSON out of response
        $parsed = $this->parseJsonFromText($responseText);

        if (!$parsed || !isset($parsed['type'])) {
            // If parsing failed -> fallback local classification but attach raw response
            $local = $this->localFallback($message);
            $local['raw'] = $responseText;
            return $local;
        }

        // Normalize result
        $type = $this->normalizeType($parsed['type'] ?? 'other');
        $product = $parsed['product'] ?? null;
        $confidence = isset($parsed['confidence']) ? floatval($parsed['confidence']) : ($parsed['score'] ?? 0.0);

        // If product empty or not in known products, null it (unless product list was not provided)
        if (!empty($this->products) && $product) {
            if (!$this->productMatches($product)) {
                $product = $product;
            }
        }

        return [
            'type' => $type,
            'product' => $product ? $this->cleanProductName($product) : $product,
            'confidence' => $this->clampConfidence($confidence),
            'raw' => $responseText,
            'parsed' => $parsed
        ];
    }

    /* -------------------------
       Internal helpers
       ------------------------- */

    private function buildPrompt(string $message, string $productList): string
    {
        // Strong instruction to return JSON only
        return <<<PROMPT
You are an assistant that classifies an enquiry message into: type and product.
Return a JSON object only (no extra text) with these keys:
{
  "type": "real | spam | job | other",
  "product": "exact product name from this list: $productList",
  "confidence": 0.0  // a number between 0 and 1 representing confidence
}

Rules:
- If the message includes CV/resume, "apply", "job", "vacancy", "position", "interview" -> type = "job".
- If the message looks like phishing, marketing blast, or includes suspicious links and spammy phrases -> type = "spam".
- Otherwise if the message appears to be a product enquiry (request for price, qty, sample, TDS, spec) -> type = "real".
- If the message contains some products name, then dont make it spam. if products is not in product list. then make it's type to "other".
- If none of the above, return "other".
- For product, if a product in the provided list is mentioned (exact or approximate spelling), return its canonical name from the list, if not present, then get whatever product name is on message.
- Confidence should be a decimal from 0.0 to 1.0.
- Output JSON only. Do not include markdown, explanation, or any other text.

Message:
\"\"\"$message\"\"\"
PROMPT;
    }

    private function callApi(array $payload): ?string
    {
        $attempt = 0;
        while ($attempt <= $this->maxRetries) {
            $attempt++;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->apiEndpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 8);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Content-Type: application/json",
                "Authorization: Bearer {$this->apiKey}"
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

            $resp = curl_exec($ch);
            $errNo = curl_errno($ch);
            $err = curl_error($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            // var_dump($resp);
            if ($resp !== false && $errNo === 0 && $httpCode >= 200 && $httpCode < 300) {
                // Typical response structure: choices[0].message.content
                $json = json_decode($resp, true);
                if (is_array($json) && isset($json['choices'][0]['message']['content'])) {
                    return $json['choices'][0]['message']['content'];
                }
                // If the structure is different, try to return raw text
                if (is_string($resp)) return $resp;
            }

            // if the HTTP code is rate limit or server error, try again (simple retry)
            if ($attempt > $this->maxRetries) break;
            // brief pause before retry
            usleep(200000); // 200ms
        }

        return null;
    }

    private function parseJsonFromText(string $text): ?array
    {
        // Try direct json decode
        $trim = trim($text);
        if ($trim === '') return null;

        // If the model returned just JSON, decode directly
        $decoded = json_decode($trim, true);
        if (is_array($decoded)) return $decoded;

        // Otherwise try to extract the first JSON object substring
        $start = strpos($text, '{');
        $end = strrpos($text, '}');
        if ($start !== false && $end !== false && $end > $start) {
            $jsonCandidate = substr($text, $start, $end - $start + 1);
            $decoded = json_decode($jsonCandidate, true);
            if (is_array($decoded)) return $decoded;
        }

        return null;
    }

    private function normalizeType($type): string
    {
        $type = strtolower(trim((string)$type));
        if (in_array($type, ['real', 'real_query', 'product_query', 'product', 'enquiry', 'inquiry'])) return 'real';
        if (in_array($type, ['spam', 'junk'])) return 'spam';
        if (in_array($type, ['job', 'job_application', 'career', 'cv'])) return 'job';
        return 'other';
    }

    private function productMatches(string $productName): bool
    {
        $prodNorm = strtolower(trim($productName));
        foreach ($this->products as $p) {
            if (strtolower($p) === $prodNorm) return true;
        }
        // try fuzzy substring match
        foreach ($this->products as $p) {
            if (stripos($prodNorm, strtolower($p)) !== false || stripos(strtolower($p), $prodNorm) !== false) {
                return true;
            }
        }
        return false;
    }

    private function cleanProductName(string $productName): string
    {
        // Return canonical product name when possible
        foreach ($this->products as $p) {
            if (strcasecmp(trim($p), trim($productName)) === 0) return $p;
            if (stripos($productName, $p) !== false) return $p;
        }
        return trim($productName);
    }

    private function clampConfidence($v): float
    {
        $f = floatval($v);
        if ($f < 0.0) $f = 0.0;
        if ($f > 1.0) $f = 1.0;
        return $f;
    }

    private function fallbackResult($type, $product = null, $confidence = 0.0, $raw = ''): array
    {
        return [
            'type' => $this->normalizeType($type),
            'product' => $product,
            'confidence' => $this->clampConfidence($confidence),
            'raw' => $raw
        ];
    }

    private function localFallback(string $message): array
    {
        // Basic local heuristic used when API fails
        $msg = strtolower($message);

        // job keywords
        $jobWords = ['resume', 'cv', 'apply', 'application', 'vacancy', 'position', 'interview', 'hiring'];
        foreach ($jobWords as $w) if (strpos($msg, $w) !== false) return $this->fallbackResult('job', null, 0.7, 'local:job');

        // spam keywords
        $spam = ['buy now', 'click here', 'free money', 'lottery', 'win', 'http://', 'https://'];
        foreach ($spam as $w) if (strpos($msg, $w) !== false) return $this->fallbackResult('spam', null, 0.6, 'local:spam');

        // product detection by exact or fuzzy match
        foreach ($this->products as $p) {
            if (stripos($msg, $p) !== false) {
                return $this->fallbackResult('real', $p, 0.6, 'local:product');
            }
            // relaxed check: words split
            $parts = preg_split('/\s+/', $p);
            foreach ($parts as $part) {
                if (strlen($part) > 3 && stripos($msg, $part) !== false) {
                    return $this->fallbackResult('real', $p, 0.5, 'local:partial');
                }
            }
        }

        return $this->fallbackResult('other', null, 0.2, 'local:default');
    }
}
