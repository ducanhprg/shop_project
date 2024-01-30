<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

$userData = [
  'username' => $_POST['username'],
  'password' => $_POST['password'],
  'email' => $_POST['email'],
  'first_name' => $_POST['first_name'],
  'last_name' => $_POST['last_name'],
  'phone' => $_POST['phone'],
];

// Check exist user
$userModel = new Users();
$userExist = $userModel->findUserByUsername($userData['username']);
if (!empty($userExist)) {
    $_SESSION['error'] = 'Username already exists';
    redirectToCreateUser();
}
$createValidators = new CreateValidators($userData);

if (!$createValidators->validate()) {
  $_SESSION['error'] = 'Invalid information';
  redirectToCreateUser();
}

$userModel->createUser($userData);
redirectToLogin();


