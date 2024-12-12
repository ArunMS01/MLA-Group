<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function

// Check if the form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['dzName'];
    $email = $_POST['dzEmail'];
    $phone = $_POST['dzPhoneNumber'];
    $subject = $_POST['subject'];
    $company = $_POST['dzCompanyName'];
    $message = $_POST['dzMessage'];
    $pageurl = $_POST['pageurl'];
    $dzcountry = $_POST['dzcountry'];

    // Validate form data
    $errors = array();

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    
     if (empty($company)) {
        $errors[] = 'Company is required.';
    }
    
     if (empty($dzcountry)) {
        $errors[] = 'Country is required.';
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

 $query = "INSERT INTO enqueries (name, email, phone_number, company, description, country, page_url) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepare the SQL query
$stmt = $db->prepare($query);

// Bind parameters and execute the query
$stmt->bind_param('sssssss', $name, $email, $phone, $company, $message, $dzcountry, $pageurl);
$stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        // Form submission was successful
        $response = array(
            'success' => true,
            'message' => 'Form submitted successfully.',
            'redirect' => 'thank-you.php' // New page URL
        );
//  $recipient = 'shivam@maidenstride.com';
        // Send email notification
        $recipient = 'md@mlagroup.com'; // Change this to the email address where you want to receive notifications
        $subject = 'New Inquery From The Website';
       $body = "
Hello Admin,

You have received a new inquiry. Please reach out to the contact person with the details below:

---------------------------------------
Name: $name
Email: $email
Phone: $phone
PageURL:  $pageurl
Message: $message
Company: $company
Country: $dzcountry
---------------------------------------

Kindly connect with them at your earliest convenience.

Best regards,
MLA Group
";
        $emailSent = sendEmail($recipient, $subject, $body);

        if (!$emailSent) {
            // If email sending fails, add a message to the response
            $response['email_message'] = 'Failed to send email notification.';
        }
    } else {
        // Form submission failed
        $response = array(
            'success' => true,
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
