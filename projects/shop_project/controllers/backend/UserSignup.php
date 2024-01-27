<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

$userData = $_POST;

$signupValidators = new Validators($userData);

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

if (!$signupValidators->validateName()) {
    $_SESSION['error'] = 'Invalid name';
    redirectToSignup();
}

if (!$signupValidators->validatePhone()) {
    $_SESSION['error'] = 'Invalid phone';
    redirectToSignup();
}

$userData['password'] = encryptPassword($_POST['password']);

$userModel = new Users();
if ($userModel->checkExistedUser($username)) {
    $_SESSION['error'] = 'User already exists';
    redirectToSignup();
}


$userModel->createUser($userData);

header("Location: $viewBasePath/backend/UserList.php");
