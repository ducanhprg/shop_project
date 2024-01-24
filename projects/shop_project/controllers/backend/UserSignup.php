<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];

$signupValidators = new SignupValidators($username, $password, $email);

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


// compare with db
// fail: go back to login page
$userModel = new Users();
if ($userModel->checkExistedUser($username)) {
    $_SESSION['error'] = 'User already exists';
    redirectToSignup();
}

$encryptedPassword = encryptPassword($password);

$userData = [
    'username' => $username,
    'password' => $encryptedPassword,
    'email' => $email,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'phone' => $phone,
];

$userModel->createUser($userData);

header("Location: $controllerBasePath/backend/UserSignup.php");
