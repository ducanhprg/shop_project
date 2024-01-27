<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];
$userData = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

// Validate username and password
$loginValidators = new Validators($userData);

if (!$loginValidators->validateUsername()) {
    $_SESSION['error'] = 'Invalid username';
    redirectToSignup();
}

if (!$loginValidators->validatePassword()) {
    $_SESSION['error'] = 'Invalid password';
    redirectToSignup();
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

if ($_SESSION['user']['username'] == 'admin') {
    unset($_SESSION['error']);
    header("Location: $viewBasePath/backend/UserList.php");
} else {
    echo 'Logged in';
    exit();
}

// -- Git: GitLab / Github / BitBucket -> Pull Request / Merge request

