<?php
// download.php
include('./codes/db.php'); // your DB connection file

if (isset($_GET['stdate']) && isset($_GET['enddate'])) {
    $start_date = $_GET['stdate'];
    $end_date   = $_GET['enddate'];

    // Validate date format
    $d1 = DateTime::createFromFormat('Y-m-d', $start_date);
    $d2 = DateTime::createFromFormat('Y-m-d', $end_date);

    if (!$d1 || !$d2) {
        die("Invalid date format. Use YYYY-MM-DD.");
    }

    // Prepare query
    $sql = "SELECT `id`, `name`, `type`, `email`, `phone_number`, `company`, 
                   `description`, `country`, `city`, `product`, 
                   `created_at`, `status`, `page_url`, `desig`, `addr` 
            FROM `enqueries` 
            WHERE archived = '0' AND `created_at` BETWEEN ? AND ?
            ORDER BY `created_at` ASC";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    
    
    // Brand Wise Data
    $brandSql = "
    SELECT 
        b.id,
        b.name,
        b.url
    FROM brand b
    ORDER BY b.name
    ";
    
    $brandResult = $db->query($brandSql);
    
    $brandData = [];
    
    while ($row = $brandResult->fetch_assoc()) {
        $brandData[$row['id']] = [
            'brand_name'       => $row['name'],
            'brand_slug'       => $row['url'],
            'brand_total'      => 0,
            'brand_page_total' => 0,
            'products'         => []
        ];
    }
    $productSql = "
    SELECT
        b.id AS brand_id,
        p.id AS product_id,
        p.title AS product_name,
        COUNT(e.id) AS total
    FROM products p
    JOIN brand b ON p.brand = b.id
    LEFT JOIN enqueries e 
        ON e.productid = p.id
        AND e.archived = '0'
        AND e.created_at BETWEEN '$start_date' AND '$end_date'
    GROUP BY b.id, p.id
    ORDER BY b.name
    ";
    
    $productResult = $db->query($productSql);
    
    while ($row = $productResult->fetch_assoc()) {
    
        $brandId = $row['brand_id'];
        $count   = (int)$row['total'];
    
        if ($row['product_id']) {
            $brandData[$brandId]['products'][] = [
                'product_name' => $row['product_name'],
                'total'        => $count
            ];
    
            $brandData[$brandId]['brand_total'] += $count;
        }
    }
    $brandPageSql = "
    SELECT
        b.id AS brand_id,
        COUNT(e.id) AS total
    FROM brand b
    LEFT JOIN enqueries e
        ON e.page_url LIKE CONCAT('%url=', b.url, '%')
        AND e.archived = '0'
        AND e.productid = 'NULL'
        AND e.created_at BETWEEN '$start_date' AND '$end_date'
    GROUP BY b.id
    ";
    
    $brandPageResult = $db->query($brandPageSql);
    
    while ($row = $brandPageResult->fetch_assoc()) {
    
        $brandId = $row['brand_id'];
        $count   = (int)$row['total'];
    
        $brandData[$brandId]['brand_page_total'] = $count;
        $brandData[$brandId]['brand_total'] += $count;
    }

// Brand Website

    // Set headers for CSV download
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=enqueries_' . $start_date . '_to_' . $end_date . '.csv');

    $output = fopen('php://output', 'w');

    // Column headers
    fputcsv($output, [
        'ID', 'Name', 'Type', 'Email', 'Phone Number', 'Company',
        'Description', 'Country', 'City', 'Product', 
        'Created At', 'Status', 'Page URL', 'Design', 'Address'
    ]);

    // Write rows
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
    
    fputcsv($output, []); // empty row
fputcsv($output, ['Brand-wise Product Summary']);
fputcsv($output, []); // empty row

foreach ($brandData as $brand) {

    // Brand header row
    fputcsv($output, [
        'Brand:', $brand['brand_name'],
        'Total Enquiries:', $brand['brand_total']
    ]);

    // Table header
    fputcsv($output, ['Product Name', 'Total Enquiries']);

    // Products
    foreach ($brand['products'] as $product) {
        fputcsv($output, [
            $product['product_name'],
            $product['total']
        ]);
    }

    // Space after each brand
    fputcsv($output, []);
}


    fclose($output);
    exit;
} else {
    die("Please select a date range.");
}
?>
