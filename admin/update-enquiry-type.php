<?php
require 'codes/db.php';

$id   = $_POST['id'] ?? null;
$type = $_POST['type'] ?? null;

$allowedTypes = ['real', 'spam', 'job', 'other'];

if (!$id || !in_array($type, $allowedTypes)) {
    echo json_encode(['success' => false]);
    exit;
}

$stmt = $db->prepare("UPDATE enqueries SET type = ? WHERE id = ?");
$stmt->bind_param("si", $type, $id);

$success = $stmt->execute();

echo json_encode(['success' => $success]);
