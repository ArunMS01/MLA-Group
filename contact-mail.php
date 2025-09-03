<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
      // --- CSRF Protection ---
    $expected_token = hash_hmac('sha256', 'send_mail', $_SERVER['REMOTE_ADDR'] . 'MLAGROUPMM123');
    // if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $expected_token) {
    //     die('Invalid request');
    // }

    // --- Sanitize Inputs ---
    $name     = trim($_POST["name"] ?? '');
    $desig    = trim($_POST["desig"] ?? '');
    $email    = trim($_POST["email"] ?? '');
    $phone    = trim($_POST["phone"] ?? '');
    $company  = trim($_POST["company"] ?? '');
    $address  = trim($_POST["address"] ?? '');
    $city     = trim($_POST["city"] ?? '');
    $zip      = trim($_POST["zip"] ?? '');
    $country  = trim($_POST["country"] ?? '');
    $message  = trim($_POST["message"] ?? '');
    $prod     = trim($_POST["prod"] ?? '');
    $pageurl  = 'https://www.mlagroup.com/contact-us';

    // --- Validation Rules ---
    $errors = [];

  // 1. Name - Required, only letters/spaces, length 2-50
if (empty($name) || !preg_match("/^[a-zA-Z\s'.-]{2,50}$/", $name)) {
    $errors[] = "Name is required and must be 2-50 letters.";
}

// 2. Designation - Required, letters/spaces only, max 100
if (empty($desig) || !preg_match("/^[a-zA-Z\s'.-]{2,100}$/", $desig)) {
    $errors[] = "Designation is required and must be valid text.";
}

// 3. Email - Required, RFC validation + block disposable emails
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email address is required.";
} else {
    $domain = substr(strrchr($email, "@"), 1);
    $disposable_domains = ["tempmail.com", "mailinator.com", "10minutemail.com"];
    if (in_array(strtolower($domain), $disposable_domains)) {
        $errors[] = "Disposable emails are not allowed.";
    }
}

// 4. Phone - Required, digits only, length 7–15
if (empty($phone) || !preg_match("/^\+?[0-9]{7,15}$/", $phone)) {
    $errors[] = "Valid phone number is required (7–15 digits).";
}

// 5. Company - Required, letters/numbers/spaces, max 150
if (empty($company) || !preg_match("/^[a-zA-Z0-9\s'.&-]{2,150}$/", $company)) {
    $errors[] = "Company is required and must be valid text.";
}

// 6. Address fields - All required with format checks
if (empty($address) || strlen($address) > 200) {
    $errors[] = "Address is required (max 200 characters).";
}

if (empty($city) || !preg_match("/^[a-zA-Z\s'-]{2,100}$/", $city)) {
    $errors[] = "City is required and must contain only letters.";
}

if (empty($zip) || !preg_match("/^[0-9A-Za-z\-]{3,15}$/", $zip)) {
    $errors[] = "Zip/Postal code is required and must be 3–15 characters.";
}

if (empty($country) || !preg_match("/^[a-zA-Z\s'-]{2,100}$/", $country)) {
    $errors[] = "Country is required and must contain only letters.";
}

// 7. Message - Required, min length 10, strip HTML
$message = strip_tags($message);
if (empty($message) || strlen($message) < 10) {
    $errors[] = "Message is required and must be at least 10 characters.";
}

// 8. Product field - Required, safe format, max 100
if (empty($prod) || !preg_match("/^[a-zA-Z0-9\s'.&-]{2,100}$/", $prod)) {
    $errors[] = "Product is required and must be valid text.";
}


    // --- Bot / Spam Protection ---
    // Honeypot field (hidden input in HTML, should remain empty)
   

    // Rate limit (5 requests per IP per 10 minutes)
    session_start();
    // $ip = $_SERVER['REMOTE_ADDR'];
    // $_SESSION['form_submissions'][$ip][] = time();
    // $_SESSION['form_submissions'][$ip] = array_filter($_SESSION['form_submissions'][$ip], fn($t) => $t > time() - 600);
    // if (count($_SESSION['form_submissions'][$ip]) > 5) {
    //     $errors[] = "Too many submissions. Please try later.";
    // }

    // Final decision
    if (!empty($errors)) {
        $response = [
            'success' => false,
            'message' => implode(" ", $errors)
        ];
         header('Content-Type: application/json');
    echo json_encode($response);
    exit;
    } 

  include('./admin/codes/db.php'); // Include your database connection file

 $query = "INSERT INTO enqueries 
          (name, email, phone_number, company, description, page_url, city,country, desig, addr, product) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

$stmt = $db->prepare($query);

$stmt->bind_param('sssssssssss', 
    $name, 
    $email, 
    $phone, 
    $company, 
    $message, 
    $pageurl, 
    $city, 
    $country,
    $desig, 
    $address, 
    $prod
);

$stmt->execute();


    // Construct email content
    //   $recipient = 'shivam@maidenstride.com';
      $recipient = 'md@mlagroup.com'; // Replace with your email address
    $subject   = 'New Inquery Form Website Contact Page';

    $emailContent = "
    Hello Admin,

    A new inquiry has been received. Please see the details below:

    ---------------------------------------
    Name of person: $name
    Designation:$desig
    Email: $email
    Phone: $phone
    Name of company: $company
    Product of interest: $prod
    Address: $address, $city, $zip, $country
    Message: $message
    ---------------------------------------

    Kindly connect with them at your earliest convenience.

    Best regards,
    Your Website Team
    ";

  $emailSent = sendEmail($recipient, $subject, $emailContent);

        if ($emailSent) {
            // If email sending fails, add a message to the response
             $response = array(
            'success' => true,
            'message' => 'SUccess'
        );
        }
    else {
        // Form submission failed
        $response = array(
            'success' => false,
            'message' => 'Error submitting the form.'
        );
    }
    
     header('Content-Type: application/json');
    echo json_encode($response);
}
 else {
    // If the request method is not POST, return an error response
    $response = array(
        'success' => false,
        'message' => 'Invalid request method.'
    );
    http_response_code(405); // Set HTTP status code to indicate method not allowed
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
