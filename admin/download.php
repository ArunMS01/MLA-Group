<?php
// download.php
include('./codes/db.php'); // your DB connection file

if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $start_date = $_GET['start_date'];
    $end_date   = $_GET['end_date'];

    // Validate date format
    $d1 = DateTime::createFromFormat('Y-m-d', $start_date);
    $d2 = DateTime::createFromFormat('Y-m-d', $end_date);

    if (!$d1 || !$d2) {
        die("Invalid date format. Use YYYY-MM-DD.");
    }

    // Prepare query
    $sql = "SELECT `id`, `name`, `email`, `phone_number`, `company`, 
                   `description`, `country`, `city`, `product`, 
                   `created_at`, `status`, `page_url`, `desig`, `addr` 
            FROM `enqueries` 
            WHERE DATE(`created_at`) BETWEEN ? AND ?
            ORDER BY `created_at` ASC";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();

    // Set headers for CSV download
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=enqueries_' . $start_date . '_to_' . $end_date . '.csv');

    $output = fopen('php://output', 'w');

    // Column headers
    fputcsv($output, [
        'ID', 'Name', 'Email', 'Phone Number', 'Company',
        'Description', 'Country', 'City', 'Product', 
        'Created At', 'Status', 'Page URL', 'Design', 'Address'
    ]);

    // Write rows
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }

    fclose($output);
    exit;
} else {
    die("Please select a date range.");
}
?>
