<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';

$userModel = new Users();
$userModel->deleteUser($_POST['deleteName']);
header("Location: $viewBasePath/backend/UserList.php");