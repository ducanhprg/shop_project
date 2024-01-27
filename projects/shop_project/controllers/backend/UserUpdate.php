<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
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

$updateValidators = new Validators($userData);

foreach ($userData as $key => $data) {
    switch ($key) {
        case 'password':
            if (!$updateValidators->validatePassword()) {
                $_SESSION['error'] = 'Invalid password';
                redirectToUpdate();
            }
            break;
        case 'email':
            if (!$updateValidators->validatePassword()) {
                $_SESSION['error'] = 'Invalid password';
                redirectToUpdate();
            }
            break;
        case 'phone':
            if (!$updateValidators->validatePassword()) {
                $_SESSION['error'] = 'Invalid password';
                redirectToUpdate();
            }
            break;
        default:
            if (!$updateValidators->validateName()) {
                $_SESSION['error'] = 'Invalid name';
                redirectToUpdate();
            }
            break;    
    }
}

$userModel = new Users();
$userModel->updateUser($username, $userData);

header("Location: $viewBasePath/backend/UserList.php");
