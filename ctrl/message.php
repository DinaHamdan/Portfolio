<?php

// session_start();

// require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
// require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/message.php';

// Read login info entered by user
$user = [];
$user['firstName'] = $_POST['fname'];
$user['lastName'] = $_POST['lname'];
$user['phoneNumber'] = $_POST['phoneNumber'];
$user['email'] = $_POST['email'];
$user['contactMsg'] = $_POST['contactMsg'];
