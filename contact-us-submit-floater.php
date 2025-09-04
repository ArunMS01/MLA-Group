<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function
include('./admin/codes/db.php');

session_start();

  $output = '';


if(isset($_POST['action'])){
    if($_POST['action'] == 'phone-number-submit'){
        
          $expected_token = hash_hmac('sha256', 'send_mail', $_SERVER['REMOTE_ADDR'] . 'MLAGROUPMM123');
    // if ($_POST['csrf_token'] !== $expected_token) {
    //     die('Invalid request');
    // }

    // === SIMPLE IP VALIDATION ===
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!isset($_SESSION['submissions'])) {
        $_SESSION['submissions'] = [];
    }

    if (!isset($_SESSION['submissions'][$ip])) {
        $_SESSION['submissions'][$ip] = [];
    }

    // keep only the last 10 minutes submissions
    $now = time();
    $_SESSION['submissions'][$ip] = array_filter(
        $_SESSION['submissions'][$ip],
        function ($t) use ($now) {
            return ($t > $now - 600); // last 600 sec = 10 min
        }
    );

    // if more than 5 submissions in 10 minutes → block
    if (count($_SESSION['submissions'][$ip]) >= 5) {
        die("Too many submissions from your IP. Please try again later.");
    }

    // record this submission
    $_SESSION['submissions'][$ip][] = $now;

    // === FORM VALUES ===
    $phonenumber   = $_POST['phone'] ?? '';
    $contactmethod = $_POST['contactmethod'] ?? '';
    $pageurl       = $_POST['pageUrl'] ?? '';
    $countrynamev  = $_POST['countrynamev'] ?? '';
    $companynamev  = $_POST['companynamev'] ?? '';
    $productid     = $_POST['productid'] ?? '';
    $msg           = $_POST['msg'] ?? '';
    $addresscity   = $_POST['address'] ?? '';
    $nameinput     = $_POST['nameinput'] ?? '';
    $deigninput    = $_POST['deigninput'] ?? '';
    $ccity         = $_POST['ccity'] ?? '';
    $cemail        = $_POST['cemail'] ?? '';

   // === SERVER SIDE VALIDATION ===
$errors = [];

// Phone number: must be digits, length 7–15
if (!preg_match('/^\+?[0-9]{7,15}$/', $phonenumber)) {
    $errors[] = "Invalid phone number.";
}
// Email: must be valid format
if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

// Name: at least 2 characters
if (empty($nameinput) || strlen($nameinput) < 2) {
    $errors[] = "Name is required and must be at least 2 characters.";
}

// Contact method: required
if (empty($contactmethod)) {
    $errors[] = "Contact method is required.";
}

// Page URL: must be valid URL if provided
if (!empty($pageurl) && !filter_var($pageurl, FILTER_VALIDATE_URL)) {
    $errors[] = "Invalid page URL.";
}

// Country name: required
if (empty($countrynamev)) {
    $errors[] = "Country is required.";
}

// Company name: required
if (empty($companynamev)) {
    $errors[] = "Company name is required.";
}

// Product ID: must be numeric
if (empty($productid)) {
    $errors[] = "Invalid product ID.";
}

// Message: optional but max 1000 chars
if (!empty($msg) && strlen($msg) > 1000) {
    $errors[] = "Message too long (max 1000 characters).";
}

// Address: required
if (empty($addresscity)) {
    $errors[] = "Address is required.";
}

// Design input: optional but at least 2 chars if filled
if (!empty($deigninput) && strlen($deigninput) < 2) {
    $errors[] = "Design input must be at least 2 characters.";
}

// City: required
if (empty($ccity)) {
    $errors[] = "City is required.";
}

// === Final check ===
if (!empty($errors)) {
    // Stop and show errors
    foreach ($errors as $err) {
        echo "<p style='color:red;'>$err</p>";
    }
    exit; // prevent further execution
}
    //     $check_customerexist = "SELECT * FROM customer_queries WHERE mobile_no = '$phonenumber'";
    //   $check_existance = mysqli_query($conn, $check_customerexist);
    //   if(mysqli_num_rows($check_existance) > 0){
    //       echo "exist";
    //   }
    //   else{
    
     $body = "
Hello Admin,

You have received a new inquiry from website Floater. Please reach out to the contact person with the details below:

---------------------------------------
Name of person:$nameinput
Designation:$deigninput
Name of company : $companynamev
Address:$addresscity
City:$ccity
Country : $countrynamev
Product of interest: $productid
Phone: $phonenumber
Email: $cemail
PageURL:  $pageurl
Message: $msg

---------------------------------------

Kindly connect with them at your earliest convenience.

Best regards,
MLA Group
";
    //   $recipient = 'shivam@maidenstride.com';
      $recipient = 'md@mlagroup.com'; // Change this to the email address where you want to receive notifications
        $subject = 'New Query From The Website Floater';
      $sql = "INSERT INTO enqueries 
(name, email, phone_number, company, country, description, page_url, city, desig, addr, product) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $db->prepare($sql);
$stmt->bind_param(
    "sssssssssss", 
    $name, 
    $email, 
    $phonenumber, 
    $companynamev, 
    $countrynamev, 
    $msg,
    $pageurl, 
    $ccity, 
    $deigninput, 
    $addresscity, 
    $productid
);

// Example values
$name = "Inquery website floater";
$email = "Inquery website floater";

$stmt->execute();

        
         $emailSent = sendEmail($recipient, $subject, $body);

        if (!$emailSent) {
            // If email sending fails, add a message to the response
             echo "error";
        }
     else {
        // Form submission failed
        echo "success";
    }
        
      
    // }
    }
}

?>