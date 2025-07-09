<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function

// Check if the form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $pageURL = $_POST['pageURL']; // Get the page URL from the form

    // Validate form data (you can add more validation if needed)
    $errors = array();

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (empty($number)) {
        $errors[] = 'Phone number is required.';
    } elseif (!preg_match('/^\+?\d+$/', $number)) {
        $errors[] = 'Invalid phone number format.';
    }

    // If there are validation errors, return them as JSON response
    if (!empty($errors)) {
        $response = array(
            'success' => false,
            'errors' => $errors
        );
        http_response_code(400); // Set HTTP status code to indicate bad request
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    // Establish a database connection
    include('./admin/db.php'); // Include your database connection file

    // Insert the form data into the database using prepared statements to prevent SQL injection
    $query = "INSERT INTO property_requests (name, phone_number, description, status, page_url) 
              VALUES (?, ?, ?, 'Contacted', ?)";
    
    // Prepare the SQL query
    $stmt = $db->prepare($query);

    // Bind parameters and execute the query
    $stmt->bind_param('ssss', $name, $number, $description, $pageURL);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        // Form submission was successful
        $response = array(
            'success' => true,
            'message' => 'Form submitted successfully.',
            'redirect' => 'thank-you.php', // New page URL
            'status' => 'Contacted' // Status as pending
        );

        // Send email notification
        $recipient = 'rahul@maidenstride.com'; // Change this to the email address where you want to receive notifications
        $subject = 'New Property Request';
        $body = "Name: $name\nPhone Number: $number\nDescription: $description\nStatus: Contacted\nPage URL: $pageURL";
        $emailSent = sendEmail($recipient, $subject, $body);

        if (!$emailSent) {
            // If email sending fails, add a message to the response
            $response['email_message'] = 'Failed to send email notification.';
        }
    } else {
        // Form submission failed
        $response = array(
            'success' => false,
            'message' => 'Error submitting the form.'
        );
    }

    // Close the database connection
    $stmt->close();
    $db->close();

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If the request method is not POST, return an error response
    $response = array(
        'success' => false,
        'message' => 'Invalid request method.'
    );
    http_response_code(405); // Set HTTP status code to indicate method not allowed
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
