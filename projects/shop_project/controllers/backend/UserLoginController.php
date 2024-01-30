<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
include_once "$root/projects/shop_project/models/Users.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];

// Validate username and password
$loginValidators = new LoginValidators($username, $password);
// Redirect to login page if validation fails
if (!$loginValidators->validateLogin()) {
    $_SESSION['error'] = $loginValidators->getErrors();
    redirect($viewBasePath . '/backend/login.php');
}

$encryptedPassword = encryptPassword($password);
$userModel = new Users();
$userData = $userModel->findUserByUsernameAndPassword($username, $encryptedPassword);

if (empty($userData)) {
    $_SESSION['error']['fail'] = 'Incorrect username or password';
    redirect($viewBasePath . '/backend/login.php');
} else {
    $_SESSION['admin'] = true;
    $_SESSION['user'] = [
        'id' => $userData['id'],
        'username' => $userData['username'],
        'email' => $userData['email'],
        'first_name' => $userData['first_name'],
        'last_name' => $userData['last_name'],
        'phone' => $userData['phone'],
    ];
    redirect($viewBasePath . '/backend/home.php');
}


