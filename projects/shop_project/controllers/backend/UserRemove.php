<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";

$userModel = new Users();
$userModel->deleteUser($_POST['deleteName']);
header("Location: $viewBasePath/backend/UserList.php");

