<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $viewBasePath;

$userData = $_POST;

// $createValidators = new LoginValidators($username, $password);

// if (!$loginValidators->validate()) {
//     $_SESSION['error'] = $loginValidators->errors;
//     redirectToCreateUser();
// }


$userData['password'] = encryptPassword($_POST['password']);
$userModel = new Users();
if ($userModel->checkExistedUser($userData['username'])) {
    $_SESSION['error'] = 'User already exists';
    redirectToCreateUser();
}


$userModel->createUser($userData);

header("Location: $viewBasePath/backend/UserList.php");