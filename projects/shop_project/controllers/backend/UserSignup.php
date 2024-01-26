<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

// Get username and password from HTTP

$userData = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'phone' => $_POST['phone'],
];

$signupValidators = new SignupValidators($userData);

if (!$signupValidators->validateUsername()) {
    $_SESSION['error'] = 'Invalid username';
    redirectToSignup();
}

if (!$signupValidators->validatePassword()) {
    $_SESSION['error'] = 'Invalid password';
    redirectToSignup();
}

if (!$signupValidators->validateEmail()) {
    $_SESSION['error'] = 'Invalid email';
    redirectToSignup();
}

$encryptedPassword = encryptPassword($_POST['password']);

$userData = [
    'password' => encryptPassword($userData['password']),
];

// compare with db
// fail: go back to login page
$userModel = new Users();
if ($userModel->checkExistedUser($username)) {
    $_SESSION['error'] = 'User already exists';
    redirectToSignup();
}


$userModel->createUser($userData);

header("Location: $controllerBasePath/backend/UserSignup.php");
