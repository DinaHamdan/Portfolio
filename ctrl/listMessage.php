<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/model/lib/message.php';

// Définit les clés de dictionnaire de la page
$pageTitle = 'Received Messages';

//Lister les marins
$listMessage = LibUser::getAllMessages();

// Rends la vue, au format HTML
include $_SERVER['DOCUMENT_ROOT'] . '/view/dashboard.php';

