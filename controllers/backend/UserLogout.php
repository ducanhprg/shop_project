<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";

unset($_SESSION['user']);
redirectToLogin();