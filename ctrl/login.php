
<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/admin.php';

// Read login info entered by user
$userInfo = [];
$userInfo['username'] = $_POST['username'];
$userInfo['pass'] = $_POST['pass'];
//The password
$password = $userInfo['pass'];


// List all user components using their email as id
$admin = LibAdmin::getAdmin($userInfo['username']);
$passHash = password_hash($admin['pass'], PASSWORD_BCRYPT);


if ($admin != null) {

    if (password_verify($password, $passHash)) {
        $_SESSION['admin'] = $admin;
        var_dump($_SESSION['admin']);

        header('Location: ' . '/ctrl/listMessage.php');
        exit;
    } else {

        // $msg = 'Incorrect Login.';
        // $_SESSION['incorrect'] = $msg;

        header('Location: ' .  '/ctrl/portfolio.php');
        exit;
    }
} else {

    // $error = 'User account not found.';
    // $_SESSION['unexisting'] = $error;

    header('Location: ' .  '/ctrl/portfolio.php');
    exit;
};
