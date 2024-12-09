<?php
if ($_FILES['upload']) {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    $fileName = $_FILES['upload']['name'];
    $fileTmpName = $_FILES['upload']['tmp_name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // Convert to lowercase for consistency

    if (in_array($fileExtension, $allowedExtensions)) {
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . basename($fileName);  // Path where the file is to be uploaded

        // Check if the file already exists
        if (file_exists($filePath)) {
            $response = [
                "uploaded" => 0,
                "error" => [
                    "message" => "Sorry, an image with the same name already exists. Please upload a different image."
                ]
            ];
        } else {
            // If file doesn't exist, move the uploaded file to the server
            if (move_uploaded_file($fileTmpName, $filePath)) {
                $response = [
                    "uploaded" => 1,
                    "fileName" => $fileName,
                    "url" => $filePath
                ];
            } else {
                $response = [
                    "uploaded" => 0,
                    "error" => [
                        "message" => "Failed to move uploaded file."
                    ]
                ];
            }
        }
    } else {
        $response = [
            "uploaded" => 0,
            "error" => [
                "message" => "Invalid file type. Only JPG, JPEG, PNG, and WEBP are allowed."
            ]
        ];
    }
} else {
    $response = [
        "uploaded" => 0,
        "error" => [
            "message" => "No file uploaded."
        ]
    ];
}

echo json_encode($response);
