<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/Bai006/project/common.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];

// Validate username and password
$loginValidators = new LoginValidators($username, $password);


if (!$loginValidators->validate()) {
    $_SESSION['error'] = 'Incorrect username or password';
    redirectToLogin();
}


$encryptedPassword = encryptPassword($password);


// compare with db
// fail: go back to login page
$userModel = new Users();
$userData = $userModel->findUserByUsernameAndPassword($username, $encryptedPassword);
if (empty($userData)) {
    $_SESSION['error'] = 'Incorrect username or password';
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

echo 'Logged in';
exit();

// -- Git: GitLab / Github / BitBucket -> Pull Request / Merge request

