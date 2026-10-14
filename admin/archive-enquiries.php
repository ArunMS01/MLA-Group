<?php
require 'codes/db.php';

$data = json_decode(file_get_contents('php://input'), true);
$ids = $data['ids'] ?? [];

if (empty($ids)) {
    echo json_encode(['success' => false]);
    exit;
}

$placeholders = implode(',', array_fill(0, count($ids), '?'));
$types = str_repeat('i', count($ids));

$sql = "UPDATE enqueries SET archived = 1 WHERE id IN ($placeholders)";
$stmt = $db->prepare($sql);
$stmt->bind_param($types, ...$ids);

echo json_encode(['success' => $stmt->execute()]);
