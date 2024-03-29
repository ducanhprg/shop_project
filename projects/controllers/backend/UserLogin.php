<?php

use services\backend\LoginValidators;

require_once $_SERVER['DOCUMENT_ROOT'] . "/common.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];

// Validate username and password
$loginValidators = new LoginValidators($username, $password);

if (!$loginValidators->validate()) {
    $_SESSION['error'] = $loginValidators->errors;
    redirectToLogin();
}

$encryptedPassword = encryptPassword($password);
$userModel = new Users();
$userData = $userModel->findUserByUsernameAndPassword($username, $encryptedPassword);
if (empty($userData)) {
    $_SESSION['error'] = ['Incorrect username or password'];
    redirectToLogin();
}

// user logged in -> create user session -> redirect to dashboard
$_SESSION['user'] = [
    'id' => $userData['id'],
    'username' => $userData['username'],
    'email' => $userData['email'],
    'first_name' => $userData['first_name'],
    'last_name' => $userData['last_name'],
    'phone' => $userData['phone'],
];

header("Location: $viewBasePath/backend/dashboard.php");
exit;

