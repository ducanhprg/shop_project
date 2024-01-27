<?php
require_once './common.php';

// create default user
$userData = [
    'username' => 'admin',
    'password' => encryptPassword('admin'),
    'email' => 'admin@localhost',
    'first_name' => 'Admin',
    'last_name' => 'System'
];
$userModel = new Users;
$userModel->createUser($userData);


// redirect to login page
redirectToLogin();

