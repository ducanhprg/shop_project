<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $viewBasePath;

// Get username and password from HTTP

$username = $_POST['username'];
$userData = $_POST;
unset($userData['username']);

foreach ($userData as $key => $data) {
    if (empty($data)) {
        unset($userData["$key"]);
    }
}

// $updateValidators = new Validators($userData);

$userModel = new Users();
$userModel->updateUser($username, $userData);

header("Location: $viewBasePath/backend/UserList.php");