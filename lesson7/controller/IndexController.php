<?php
require_once 'models/User.php';
session_start();
$pageHeader = 'WELCOME TO TODO LIST';

$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
}

include "view/index.php";
