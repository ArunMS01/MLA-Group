<?php
require 'vendor/autoload.php'; // Include autoload.php to load PHPMailer library
require 'send_email_funtion.php'; // Include the file containing sendEmail function
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;

$phoneUtil = PhoneNumberUtil::getInstance();

// Check if the form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        function sendError($msg)
        {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'errors' => $msg]);
            exit;
        }

        $phone = isset($_POST["dzPhoneNumber"]) ? trim($_POST["dzPhoneNumber"]) : '';
        $code  = isset($_POST["countrycode"]) ? trim($_POST["countrycode"]) : '';

        if (empty($phone) || empty($code)) {
            sendError("Phone number and country code required.");
        }

        $phone = preg_replace('/\s+/', '', $phone);
        $fullNumber = '+' . $code . $phone;

        $numberProto = $phoneUtil->parse($fullNumber, null);

        // Region detected from number
        $region = $phoneUtil->getRegionCodeForNumber($numberProto);

        // 1. Check possible number
        if (!$phoneUtil->isPossibleNumber($numberProto)) {
            sendError("Number is not possible.");
        }

        // 2. Check valid number (global rules)
        if (!$phoneUtil->isValidNumber($numberProto)) {
            sendError("Number is not valid.");
        }

        // 3. Check valid number for region
        if (!$phoneUtil->isValidNumberForRegion($numberProto, $region)) {
            sendError("Number is not valid for region $region.");
        }

        // 4. Restrict to mobile numbers
        $type = $phoneUtil->getNumberType($numberProto);
        if (!in_array($type, [
            \libphonenumber\PhoneNumberType::MOBILE,
            \libphonenumber\PhoneNumberType::FIXED_LINE_OR_MOBILE
        ])) {
            sendError("Only mobile numbers are allowed.");
        }

        // 5. Format standardized
        $formatted = $phoneUtil->format($numberProto, \libphonenumber\PhoneNumberFormat::E164);

        // $response = [
        //     'success' => true,
        //     'message' => "Valid number.",
        //     'region'  => $region,
        //     'number'  => $formatted
        // ];
        // header('Content-Type: application/json');
        // echo json_encode($response);
        // exit;

    } catch (\libphonenumber\NumberParseException $e) {
        sendError("Invalid phone number format.");
    }


    // Retrieve form data
    $name = $_POST['dzName'];
    $email = $_POST['dzEmail'];
    $phone = $_POST['dzPhoneNumber'];
    $subject = $_POST['subject'];
    $company = $_POST['dzCompanyName'];
    $message = $_POST['dzMessage'];
    $pageurl = $_POST['pageurl'];
    $dzcountry = $_POST['dzcountry'];
    $dzdesign = $_POST['dzdesign'];
    $address = $_POST['address'];
    $city = $_POST['city'];



    // === CSRF CHECK ===
    $expected_token = hash_hmac('sha256', 'send_mail', $_SERVER['REMOTE_ADDR'] . 'MLAGROUPMM123');
    // if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $expected_token) {
    //     die('Invalid request');
    // }

    $errors = [];

    // === NAME ===
    if (empty($name) || !preg_match("/^[a-zA-Z\s'.-]{2,50}$/", $name)) {
        $errors[] = "Valid name (2-50 characters, letters only) is required.";
    }

    // === EMAIL ===
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // === PHONE ===
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^\+?[0-9]{7,15}$/', $phone)) {
        $errors[] = "Invalid phone number format (7–15 digits, optional +).";
    }

    // === COMPANY ===
    if (empty($company) || strlen($company) < 2) {
        $errors[] = "Company name is required.";
    }

    // === COUNTRY ===
    if (empty($dzcountry)) {
        $errors[] = "Country is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]{2,50}$/", $dzcountry)) {
        $errors[] = "Invalid country name.";
    }

    // === DESIGN ===
    if (empty($dzdesign)) {
        $errors[] = "Design input is required.";
    }

    // === ADDRESS ===
    if (!empty($address) && strlen($address) > 100) {
        $errors[] = "Address too long (max 100 chars).";
    }

    // === CITY ===
    if (!empty($city) && !preg_match("/^[a-zA-Z\s]{2,50}$/", $city)) {
        $errors[] = "Invalid city name.";
    }

    // === SUBJECT ===
    if (!empty($subject) && strlen($subject) > 150) {
        $errors[] = "Subject too long (max 150 chars).";
    }

    // === MESSAGE ===
    if (empty($message) || strlen($message) < 5) {
        $errors[] = "Message must be at least 5 characters.";
    }

    // === PAGE URL ===
    if (!empty($pageurl) && !filter_var($pageurl, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid page URL.";
    }

    // === SPAM / BOT PREVENTION ===
    if (preg_match("/https?:\/\//i", $message)) {
        $errors[] = "Links are not allowed in message.";
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

    $query = "INSERT INTO enqueries 
    (name, email, phone_number, company, description, country, page_url, city, desig, addr) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL query
    $stmt = $db->prepare($query);

    // Bind parameters (10 strings = 'ssssssssss')
    $stmt->bind_param(
        'ssssssssss',
        $name,
        $email,
        $phone,
        $company,
        $message,
        $dzcountry,
        $pageurl,
        $city,
        $dzdesign,
        $address
    );

    // Execute the query
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
Name of person: $name
Designation: $dzdesign
Name of company: $company
Address: $address
City:$city
Country: $dzcountry
Product of interest:  $pageurl
Email: $email
Phone: $phone
Message: $message

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
