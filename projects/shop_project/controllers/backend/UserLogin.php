<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";
global $viewBasePath;

// Get username and password from HTTP
$username = $_POST['username'];
$password = $_POST['password'];

// Validate username and password
$loginValidators = new LoginValidators($username, $password);


if (!$loginValidators->Validate()) {
    // Store errors in session
    $error = $loginValidators->getErrors();
    $_SESSION['error'] = $error;
    // Redirect to login page if validation fails
    redirect($viewBasePath.'/backend/login.php');
}else{
    // Store username and password in session
    if ($username == 'admin' && $password == 'Admin99') {
        $_SESSION['admin'] = true;
        $_SESSION['adminUsername'] = $username;
        $_SESSION['adminPassword'] = $password;
        // Redirect to home page
        redirect($viewBasePath.'/backend/home.php');
    }else{
        $_SESSION['error']['fail'] = 'Username or password is incorrect';
        unset($_SESSION['error']['username']) ;
        unset($_SESSION['error']['password']) ;
        // Redirect to login page
        redirect($viewBasePath.'/backend/login.php');
    }
}
