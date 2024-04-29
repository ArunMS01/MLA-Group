<?php 
include('db.php');

// Function to handle file upload
function uploadFile($file) {
    // Specify the directory where the file will be uploaded
    $uploadDirectory = 'uploads/'; // Change this to your desired upload directory
    
    // Check if the file was uploaded without errors
    if ($file['error'] == UPLOAD_ERR_OK) {
        // Generate a unique filename to avoid overwriting existing files
        $fileName = uniqid() . '_' . basename($file['name']);
        $targetFilePath = $uploadDirectory . $fileName;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            // File upload successful, return the path to the uploaded file
            return $targetFilePath;
        } else {
            // File upload failed, return false
            return false;
        }
    } else {
        // File upload failed, return false
        return false;
    }
}
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $title = $_POST['title'];
    $url = $_POST['url'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $brand_id = $_POST['brand_id']; // Retrieve status from the form


    // Check if a brand with the same name already exists except for the current brand being edited
$sqlCheckNameExistence = "SELECT id FROM brand WHERE name = '$title' AND id != $brand_id";
$resultCheckNameExistence = $db->query($sqlCheckNameExistence);

if ($resultCheckNameExistence->num_rows > 0) {
    // A brand with the same name already exists
    $response = array(
        'success' => false,
        'message' => 'A brand with the same name already exists.'
    );

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Stop further execution
}

// Check if a brand with the same URL already exists except for the current brand being edited
$sqlCheckUrlExistence = "SELECT id FROM brand WHERE url = '$url' AND id != $brand_id";
$resultCheckUrlExistence = $db->query($sqlCheckUrlExistence);

if ($resultCheckUrlExistence->num_rows > 0) {
    // A brand with the same URL already exists
    $response = array(
        'success' => false,
        'message' => 'A brand with the same URL already exists.'
    );

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Stop further execution
}

    // Check if a new logo file is uploaded
    if (!empty($_FILES['logo']) && $_FILES['logo']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Handle file upload
        $logoPath = uploadFile($_FILES['logo']);
        if ($logoPath === false) {
            // File upload failed
            $response = array(
                'success' => false,
                'message' => 'Error uploading logo file.'
            );
            header('Content-Type: application/json');
            echo json_encode($response);
            exit; // Stop further execution
        }
    } else {
        // No new logo file uploaded, keep the existing logo path
        $logoPath = ''; // Set empty path
    }

    // Prepare SQL statement for updating brand data
    $sql = "UPDATE brand SET name = '$title', url = '$url', description = '$description', status = '$status'";

    // Add logo field to the query if a new logo file is uploaded
    if (!empty($logoPath)) {
          $sql .= ", logo = '$logoPath'";
    }

    // Append WHERE clause to specify which brand to update (use appropriate condition based on your application)
    $sql .= " WHERE id = $brand_id"; // Assuming $brand_id contains the ID of the brand being updated

    if ($db->query($sql) === TRUE) {
        // If update is successful, return success message
        $response = array(
            'success' => true,
            'message' => 'Brand updated successfully.'
        );
    } else {
        // If update fails, return error message
        $response = array(
            'success' => false,
            'message' => 'Error updating brand: ' . $db->error
        );
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If request method is not POST, return error message
    $response = array(
        'success' => false,
        'message' => 'Invalid request method.'
    );

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
}


?>