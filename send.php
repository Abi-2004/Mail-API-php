<?php

require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($senderEmail, $senderPassword, $title, $receiverEmail, $content) {
    $mail = new PHPMailer(true); 
    
    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = $senderEmail;
        $mail->Password = $senderPassword;
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 
    
        
        $mail->setFrom($senderEmail);
        $mail->addAddress($receiverEmail);
        $mail->Subject = $title;
        $mail->Body = $content;
    
      
        $mail->send();
        echo 'Email sent successfully!';
    } catch (Exception $e) {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}


$senderEmail = 'sender@email.com';
$senderPassword = 'password'; 
$title = 'Hello';
$receiverEmail = 'reciver@rmail.com';
$content = 'This is the email content.';

sendEmail($senderEmail, $senderPassword, $title, $receiverEmail, $content);
?>
