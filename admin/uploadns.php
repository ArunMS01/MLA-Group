<?php

header('Content-Type: application/json');

$targetDir = "uploadck/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$fileName = time() . "_" . basename($_FILES["file"]["name"]);
$targetFile = $targetDir . $fileName;

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {

    echo json_encode([
        "success" => true,
        "files" => [$fileName],
        "path" => "",
        "baseurl" => "https://mlagroup.com/admin/uploadck/"
    ]);

} else {

    echo json_encode([
        "success" => false,
        "message" => "Upload failed"
    ]);
}