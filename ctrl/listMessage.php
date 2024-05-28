<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/message.php';

// Définit les clés de dictionnaire de la page
$pageTitle = 'Received Messages';

//Lister les marins
$listMessage = LibUser::getAllMessages();


// //Special content welcome message
// $userName = $_SESSION['admin']['username'];
// $specialMessage = 'Hello ' . $userName . ', welcome.';

// //Get the code of the user's role
// $codeRole = $_SESSION['admin']['codeRole'];
// //Check if the code of the user's role == A, meaning that its an Admin
// //If the user is an admin he will be redirected towards the classified content

// if ($codeRole == 'A') {
//     include $_SERVER['DOCUMENT_ROOT'] . '/view/dashboard.php';
//     exit;
// };


// //If not go back to loging page
// header('Location: ' . '/ctrl/login-display.php');


include $_SERVER['DOCUMENT_ROOT'] . '/view/dashboard.php';
