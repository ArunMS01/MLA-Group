<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form input
    $name     = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone    = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
    $company  = filter_var(trim($_POST["company"]), FILTER_SANITIZE_STRING);
    $address  = filter_var(trim($_POST["address"]), FILTER_SANITIZE_STRING);
    $city     = filter_var(trim($_POST["city"]), FILTER_SANITIZE_STRING);
    $zip      = filter_var(trim($_POST["zip"]), FILTER_SANITIZE_STRING);
    $country  = filter_var(trim($_POST["country"]), FILTER_SANITIZE_STRING);
    $message  = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
    $pageurl = 'https://www.mlagroup.com/contactus';
    // Validation - ensuring mandatory fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
         $response = array(
            'success' => false,
            'message' => 'Name, Email and Message is required.'
        );
    }

  include('./admin/codes/db.php'); // Include your database connection file

 $query = "INSERT INTO enqueries (name, email, phone_number, company, description, page_url) 
          VALUES (?, ?, ?, ?, ?, ?)";

// Prepare the SQL query
$stmt = $db->prepare($query);

// Bind parameters and execute the query
$stmt->bind_param('ssssss', $name, $email, $phone, $company, $message, $pageurl);
$stmt->execute();

    // Construct email content
    //   $recipient = 'sv708128@gmail.com';
     $recipient = 'md@mlagroup.com'; // Replace with your email address
    $subject   = 'New Inquery Form Website Contact Page';

    $emailContent = "
    Hello Admin,

    A new inquiry has been received. Please see the details below:

    ---------------------------------------
    Name: $name
    Email: $email
    Phone: $phone
    Company: $company
    Address: $address, $city, $zip, $country
    Message: $message
    ---------------------------------------

    Kindly connect with them at your earliest convenience.

    Best regards,
    Your Website Team
    ";

  $emailSent = sendEmail($recipient, $subject, $emailContent);

        if ($emailSent) {
            // If email sending fails, add a message to the response
             $response = array(
            'success' => true,
            'message' => 'SUccess'
        );
        }
    else {
        // Form submission failed
        $response = array(
            'success' => false,
            'message' => 'Error submitting the form.'
        );
    }
    
     header('Content-Type: application/json');
    echo json_encode($response);
}
 else {
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
