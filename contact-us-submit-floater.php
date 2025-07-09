<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function
include('./admin/codes/db.php');

session_start();

  $output = '';


if(isset($_POST['action'])){
    if($_POST['action'] == 'phone-number-submit'){
        
           $expected_token = hash_hmac('sha256', 'send_mail', $_SERVER['REMOTE_ADDR'] . 'MLAGROUPMM123');
if ($_POST['csrf_token'] !== $expected_token) {
    die('Invalid request');
}
        
        $phonenumber = $_POST['phone'];
        $contactmethod = $_POST['contactmethod'];
        $pageurl = $_POST['pageUrl'];
         $countrynamev = $_POST['countrynamev'];
          $companynamev = $_POST['companynamev'];
          $productid = $_POST['productid'];
          $msg = $_POST['msg'];
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

Phone: $phonenumber
PageURL:  $pageurl
Country : $countrynamev
Company : $companynamev
Product Name: $productid
Message: $msg
---------------------------------------

Kindly connect with them at your earliest convenience.

Best regards,
MLA Group
";
    //  $recipient = 'shivam@maidenstride.com';
     $recipient = 'md@mlagroup.com'; // Change this to the email address where you want to receive notifications
        $subject = 'New Query From The Website Floater';
        $sql = "INSERT INTO enqueries (name, email, phone_number, company, country, page_url) VALUES ('Inquery website floater', 'Inquery website floater', '$phonenumber','$companynamev', '$countrynamev', '$pageurl')";
        $result = mysqli_query($db, $sql);
        
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