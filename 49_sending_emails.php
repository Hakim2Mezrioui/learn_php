<?php
/*
|--------------------
| Sending Emails
|--------------------
*/

/*
* install package phpmailer
* composer require phpmailer/phpmailer
*/

require "./vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// $mailer = new PHPMailer();
// $mailer->isSMTP();
// $mailer->host = "smtp.gmail.com";
// $mailer->SMTPAuth = true;
// $mailer->Username = "mezrioui.hakim@gmail.com";
// $mailer->Password = "gqcx bxia fhqa twad";
// $mailer->SMTPSecure = PHPMAILER::ENCRYPTION_STARTTLS; // PHPMAILER::ENCRYPTION_SMTPS; // PHPMAILER::ENCRYPTION_STARTTLS
// $mailer->Port = 587; //465; // 587

// $mailer->setFrom("mezrioui.hakim@gmail.com", "hakim");
// $mailer->addReplyTo("mezrioui.hakim@gmail.com", "hakim");

// $mailer->addAddress("anotheremail@test.com", "anas");
// $mailer->addAddress("anotheremail@test.com", "adam");

// $mailer->addCC("ceo@example.com", "ceo");
// $mailer->addBCC("finance@example.com", "finance");

// $mailer->isHTML(true);
// $mailer->Subject = "this is a test email";
// $mailer->Body = "<p>Hello,</p><p>This is a test email sent from PHP using PHPMailer.</p>";
// $mailer->AltBody = "I'm sending you this email from PHP. we are using PHPMailer";
// $mailer->addAttachment("pathofthefile", "image.jpg");
// $mailer->send();

// ________________________________________________________//

// Load dotenv if you're using environment variables for sensitive data
// require "./vendor/autoload.php";
// use Dotenv\Dotenv;
// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

$mailer = new PHPMailer(true); // Passing true enables exceptions
try {
    // SMTP configuration for Gmail
    $mailer->isSMTP();
    $mailer->Host = "smtp.gmail.com";
    $mailer->SMTPAuth = true;
    $mailer->Username = "mezrioui.hakim@gmail.com"; // Your Gmail address
    $mailer->Password = "gqcx bxia fhqa twad "; // Your Gmail password or app-specific password
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS encryption
    $mailer->Port = 587;

    // Sender and reply-to information
    $mailer->setFrom("mezrioui.hakim@gmail.com", "Your Name");
    $mailer->addReplyTo("mezrioui.hakim@gmail.com", "Your Name");

    // Add recipients, CC, and BCC
    $mailer->addAddress("recipient1@example.com", "Recipient 1");
    $mailer->addAddress("recipient2@example.com", "Recipient 2");
    // $mailer->addCC("cc@example.com", "CC Recipient");
    // $mailer->addBCC("bcc@example.com", "BCC Recipient");

    // Email content
    $mailer->isHTML(true); // Set email format to HTML
    $mailer->Subject = "This is a test email";
    $mailer->Body = "<p>Hello,</p><p>This is a test email sent from PHP using PHPMailer.</p>";

    // Send email
    $mailer->send();
    echo "Email sent successfully";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mailer->ErrorInfo}";
}


/*
|--------------------
| End of Sending Emails
|--------------------
*/