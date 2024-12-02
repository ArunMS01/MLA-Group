<?php 
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
function sendEmail($recipient,$subject,$body){
    $mail=new PHPMailer();
    // $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->Username = 'bornwithcode@gmail.com'; // Your Gmail email address
    $mail->Password = 'tniq baau fkfo wfna'; // Your Gmail password or app-specific password
    $mail->SMTPSecure='tls';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('mlagroup@mlagroup.com', 'MLA GROUP');
    $mail->addAddress($recipient);

    $mail->Subject = $subject;
    $mail->Body = $body;

    return $mail->send();
}