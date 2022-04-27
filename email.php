<?php
$email_id = isset($_POST['email']) ? $_POST['email'] : "";


$subject = isset($_POST['subject']) ? $_POST['subject'] : "";

$body= isset($_POST['body']) ? $_POST['body'] : "";

$sender = isset($_POST['sender']) ? $_POST['sender'] : "";




require("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Passing true enables exceptions.
$phpmailer = new PHPMailer(true);

try {
  // Configure SMTP
  $phpmailer->isSMTP();
  $phpmailer->SMTPDebug=1;
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = "tls";

  // ENV Credentials
//   $phpmailer->Host = getenv("MAILGUN_SMTP_SERVER", true);
//   $phpmailer->Port = intval(getenv("MAILGUN_SMTP_PORT", true));
//   $phpmailer->Username = getenv("MAILGUN_SMTP_LOGIN", true);
//   $phpmailer->Password = getenv("MAILGUN_SMTP_PASSWORD", true);
//   $mailguntogo_domain = getenv("MAILGUN_DOMAIN", true);

    // ENV Credentials
    $phpmailer->Mailer = "smtp";
    $phpmailer->Host ="smtp.gmail.com";
    $phpmailer->Port = 587;
    $phpmailer->Username = "ibots.robin@gmail.com";
    $phpmailer->Password = "robinsonrajiv123";
    // $mailguntogo_domain = getenv("MAILGUN_DOMAIN", true);

  // Mail Headers
  $phpmailer->SetFrom("ibots.robin@gmail.com", $sender);
  // Change to recipient email. Make sure to use a real email address in your tests to avoid hard bounces and protect your reputation as a sender.
  $phpmailer->AddAddress("$email_id", "Robin");
  
  // Message
  $phpmailer->IsHTML(true);
  $phpmailer->Subject = $subject;
  $phpmailer->Body    = $body;
  $phpmailer->AltBody = "Hi!\nTest from Mailer To Go 😊\n";

  // Send the Email
  $phpmailer->send();
  echo "Message has been sent";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
  var_dump($phpmailer);
}