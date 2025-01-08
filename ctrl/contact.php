<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phoneNumber = $_POST['phoneNumber'];

    $email = $_POST['email'];
    $message = $_POST['contactMsg'];

    $to = "dina.hamdane@hotmail.com";
    $subject = "Contact form message from $fname";
    $body = $message;
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
