<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'mail.thamonwan.top';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@thamonwan.top';
    $mail->Password = 'DimmerP@400686';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    /*
    Username:	contact@thamonwan.top
    Password:	DimmerP@400686
    POP/IMAP Server:	mail.thamonwan.top
    SMTP Server:	mail.thamonwan.top port 587
    */


    $mail->setFrom('contact@thamonwan.top');
    $mail->addAddress('thamonwan.mtb@gmail.com');
    $mail->Subject = 'A mail send from PHP';
    $mail->Body = 'Hello from PHP';

    $mail->send();

 echo 'Message sent';
} catch (Exception $e) {
    echo 'Message not sent: ', $mail->ErrorInfo;
}