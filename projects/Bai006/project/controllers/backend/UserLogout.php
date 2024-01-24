<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/Bai006/project/common.php";

unset($_SESSION['user']);
redirectToLogin();