<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/admin.php';



//Rends la vue
include $_SERVER['DOCUMENT_ROOT'] . '/view/login-display.php';
