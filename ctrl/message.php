<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/message.php';

// Read login info entered by user
$user = [];
$user['firstName'] = $_POST['fname'];
$user['lastName'] = $_POST['lname'];
$user['phoneNumber'] = $_POST['phoneNumber'];
$user['email'] = $_POST['email'];
$user['contactMsg'] = $_POST['contactMsg'];

//Create message
$isSuccess = LibUser::createMessage($user['firstName'], $user['lastName'], $user['email'], $user['phoneNumber'], $user['contactMsg']);

if ($isSuccess == true) {
    $message = "Your Message has beent sent with success";
    echo "<script type='text/javascript'>alert('$message');</script>";

    // $successMsg = 'Your Message has beent sent with success';
    // $_SESSION['success'] = $successMsg;

    // Redirige vers le portfolio
    header('Location: ' . '/ctrl/portfolio.php');
    exit;
} else {

    $message = "Please try again";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // Redirige vers le portfolio
    header('Location: ' . '/ctrl/portfolio.php');
    exit;
};
