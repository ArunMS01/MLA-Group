<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function

// Check if the form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form data
    $errors = array();

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // You can add more validation rules for phone, subject, and message if needed

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
    include('./admin/codes/db.php'); // Include your database connection file

    // Insert the form data into the database using prepared statements to prevent SQL injection
    $query = "INSERT INTO contact_form_data (name, email, phone, subject, message) 
              VALUES (?, ?, ?, ?, ?)";
    
    // Prepare the SQL query
    $stmt = $db->prepare($query);

    // Bind parameters and execute the query
    $stmt->bind_param('sssss', $name, $email, $phone, $subject, $message);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        // Form submission was successful
        $response = array(
            'success' => true,
            'message' => 'Form submitted successfully.',
            'redirect' => 'thank-you.php' // New page URL
        );

        // Send email notification
        $recipient = 'rahul@maidenstride.com'; // Change this to the email address where you want to receive notifications
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";
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
