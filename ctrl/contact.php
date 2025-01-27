
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // For Composer installation
// require 'PHPMailer/src/Exception.php'; // For manual installation
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    //$phoneNumber = $_POST['phoneNumber'];
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['contactMsg']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'dina.m.hamdane@gmail.com'; // SMTP username
        $mail->Password = 'tcqy xmma xzqm yfxe'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $fname);
        $mail->addAddress('dina.m.hamdane@gmail.com'); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = " Portfolio contact form message from $fname $lname";
        $mail->Body    = nl2br($message);

        $mail->send();
        $message = "Your Message has beent sent with success";
        echo 'Message has been sent successfully!';
        header('Location: ' . '/ctrl/portfolio.php');
        exit;
    } catch (Exception $e) {
        $message = "Please try again";
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('Location: ' . '/ctrl/portfolio.php');
        exit;
    }
}
?>
