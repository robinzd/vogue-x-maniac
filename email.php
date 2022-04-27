<?php

require("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Passing true enables exceptions.
$phpmailer = new PHPMailer(true);

try {
  // Configure SMTP
  $phpmailer->isSMTP();
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  // ENV Credentials
  $phpmailer->Host = getenv("MAILGUN_SMTP_SERVER", true);
  $phpmailer->Port = intval(getenv("MAILGUN_SMTP_PORT", true));
  $phpmailer->Username = getenv("MAILGUN_SMTP_LOGIN", true);
  $phpmailer->Password = getenv("MAILGUN_SMTP_PASSWORD", true);
  $mailguntogo_domain = getenv("MAILGUN_DOMAIN", true);

  // Mail Headers
  $phpmailer->setFrom("ibots.robin@gmail.com", "Mailer");
  // Change to recipient email. Make sure to use a real email address in your tests to avoid hard bounces and protect your reputation as a sender.
  $phpmailer->addAddress("rickmathews2@gmail.com", "Recipient");
  
  // Message
  $phpmailer->isHTML(true);
  $phpmailer->Subject = "Mailer To Go Test";
  $phpmailer->Body    = "<b>Hi</b>\nTest from Mailer To Go 😊\n";
  $phpmailer->AltBody = "Hi!\nTest from Mailer To Go 😊\n";

  // Send the Email
  $phpmailer->send();
  echo "Message has been sent";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}