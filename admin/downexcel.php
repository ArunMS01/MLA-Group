<?php
include('./codes/db.php');
require 'phpspreadsheet/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Style\Fill;

if (!isset($_GET['stdate'], $_GET['enddate'])) {
    die("Please select a date range.");
}

$start_date = $_GET['stdate'];
$end_date   = $_GET['enddate'];

// Validate dates
$d1 = DateTime::createFromFormat('Y-m-d', $start_date);
$d2 = DateTime::createFromFormat('Y-m-d', $end_date);
if (!$d1 || !$d2) {
    die("Invalid date format.");
}

/* =========================
   MAIN ENQUIRIES QUERY
========================= */
$sql = "SELECT `id`, `name`, `type`, `email`, `phone_number`, `company`, 
               `description`, `country`, `city`, `product`, 
               `created_at`, `status`, `page_url`, `desig`, `addr`
        FROM enqueries
        WHERE archived = '0'
        AND created_at BETWEEN ? AND ?
        ORDER BY created_at ASC";

$stmt = $db->prepare($sql);
$stmt->bind_param("ss", $start_date, $end_date);
$stmt->execute();
$result = $stmt->get_result();

/* =========================
   BRAND DATA (UNCHANGED)
========================= */
$brandData = [];

$brandSql = "SELECT id, name, url FROM brand ORDER BY name";
$brandResult = $db->query($brandSql);

while ($row = $brandResult->fetch_assoc()) {
    $brandData[$row['id']] = [
        'brand_name'       => $row['name'],
        'brand_total'      => 0,
        'products'         => []
    ];
}

$productSql = "
SELECT b.id AS brand_id, p.id AS product_id, p.title AS product_name,
       COUNT(e.id) AS total
FROM products p
JOIN brand b ON p.brand = b.id
LEFT JOIN enqueries e 
    ON e.productid = p.id
    AND e.archived = '0'
    AND e.created_at BETWEEN '$start_date' AND '$end_date'
GROUP BY b.id, p.id
ORDER BY b.name";

$productResult = $db->query($productSql);

while ($row = $productResult->fetch_assoc()) {
    $brandData[$row['brand_id']]['products'][] = [
        'product_name' => $row['product_name'],
        'total'        => (int)$row['total']
    ];
    $brandData[$row['brand_id']]['brand_total'] += (int)$row['total'];
}

/* =========================
   EXCEL GENERATION
========================= */
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$rowNum = 1;

/* ---- Main Table Header ---- */
$headers = [
    'ID','Name','Type','Email','Phone','Company','Description',
    'Country','City','Product','Created At','Status','Page URL','Design','Address'
];

$sheet->fromArray($headers, null, 'A'.$rowNum);
$sheet->getStyle("A{$rowNum}:O{$rowNum}")->getFont()->setBold(true);
$rowNum++;

/* ---- Main Table Data ---- */
while ($row = $result->fetch_assoc()) {
    $sheet->fromArray(array_values($row), null, 'A'.$rowNum);
    $rowNum++;
}

/* ---- Space ---- */
$rowNum += 2;

/* =========================
   BRAND SUMMARY (HIGHLIGHTED)
========================= */
foreach ($brandData as $brand) {

    // Brand header
    $sheet->setCellValue("A{$rowNum}", "Brand: {$brand['brand_name']}");
    $sheet->setCellValue("C{$rowNum}", "Total Enquiries: {$brand['brand_total']}");

    // Highlight brand row
    $sheet->getStyle("A{$rowNum}:C{$rowNum}")->applyFromArray([
        'font' => ['bold' => true],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => ['argb' => 'FFFFE699']
        ]
    ]);

    $rowNum++;

    // Product table header
    $sheet->fromArray(['Product Name', 'Total Enquiries'], null, "A{$rowNum}");
    $sheet->getStyle("A{$rowNum}:B{$rowNum}")->getFont()->setBold(true);
    $rowNum++;

    // Product rows
    foreach ($brand['products'] as $product) {
        $sheet->setCellValue("A{$rowNum}", $product['product_name']);
        $sheet->setCellValue("B{$rowNum}", $product['total']);
        $rowNum++;
    }

    $rowNum += 2;
}

/* =========================
   AUTO COLUMN WIDTH
========================= */
foreach (range('A','O') as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

/* =========================
   DOWNLOAD
========================= */
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=enqueries_{$start_date}_to_{$end_date}.xlsx");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>