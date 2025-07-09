<?php
if(isset($_FILES['upload']['name'])) {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    $fileName = $_FILES['upload']['name'];
    $fileTmpName = $_FILES['upload']['tmp_name'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $functionNumber = isset($_GET['CKEditorFuncNum']) ? intval($_GET['CKEditorFuncNum']) : 0;

    // Sanitize the file name to prevent path traversal and special characters
    $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $fileName);

    if (in_array($fileExtension, $allowedExtensions)) {
        $uploadDir = 'uploadck/';
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmpName, $filePath)) {
            $url = 'https://mlagroup.com/admin/' . $filePath;

            if ($functionNumber) {
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($functionNumber, '$url', '');</script>";
            } else {
                $response = [
                    "uploaded" => 1,
                    "fileName" => $fileName,
                    "url" => $url
                ];
                echo json_encode($response);
            }
        } else {
            $response = [
                "uploaded" => 0,
                "error" => [
                    "message" => "Failed to move uploaded file."
                ]
            ];
            echo json_encode($response);
        }
    } else {
        $response = [
            "uploaded" => 0,
            "error" => [
                "message" => "Invalid file type. Only JPG, JPEG, PNG, and WEBP are allowed."
            ]
        ];
        echo json_encode($response);
    }
} else {
    $response = [
        "uploaded" => 0,
        "error" => [
            "message" => "No file uploaded."
        ]
    ];
    echo json_encode($response);
}
?>
