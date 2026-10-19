<?php
require 'codes/db.php';

$enquiryId = $_POST['enquiry_id'] ?? null;
$productId = $_POST['product_id'] ?? null;



if (!$enquiryId) {
    echo json_encode(['success' => false]);
    exit;
}

if(!$productId){
    $productId = NULL;
   $stmt = $db->prepare("UPDATE enqueries SET productid = ? WHERE id = ?");
$stmt->bind_param("ii", $productId, $enquiryId);

echo json_encode(['success' => $stmt->execute()]); 
exit;
}

// optional: validate product exists
$check = $db->prepare("SELECT id FROM products WHERE id = ?");
$check->bind_param("i", $productId);
$check->execute();
$check->store_result();

if ($check->num_rows === 0) {
    echo json_encode(['success' => false]);
    exit;
}

$stmt = $db->prepare("UPDATE enqueries SET productid = ? WHERE id = ?");
$stmt->bind_param("ii", $productId, $enquiryId);

echo json_encode(['success' => $stmt->execute()]);
