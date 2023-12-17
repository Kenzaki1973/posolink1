<?
// email.php

require 'vendor/autoload.php'; // Path to the PHPMailer autoloader

function configureMailer() {
    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // Enable verbose debug output (comment out or set to 0 in production)
    // $mail->SMTPDebug = 2;

    // Set the mailer to use SMTP
    $mail->isSMTP();

    // Specify the SMTP server
    $mail->Host = 'smtp.gmail.com';

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // SMTP username (your Gmail email address)
    $mail->Username = 'tribucioneilfrancis03@gmail.com';

    // SMTP password (your Gmail password)
    $mail->Password = 'uzin tyvt ocui dnue';

    // Enable TLS encryption
    $mail->SMTPSecure = 'SSL';

    // Set the SMTP port (use 587 for TLS, 465 for SSL)
    $mail->Port = 465;

    // Set the sender's email and name
    $mail->setFrom('neilfrancistribucio@gmail.com', 'Neil Francis');

    return $mail;
}
