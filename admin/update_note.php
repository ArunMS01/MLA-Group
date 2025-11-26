<?php
include('./codes/db.php');

if (isset($_POST['lead_id'], $_POST['note'])) {
    $id = intval($_POST['lead_id']);
    $note = $db->real_escape_string($_POST['note']);

    $query = "UPDATE enqueries SET notes = '$note' WHERE id = $id";
    if ($db->query($query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>