<?php
require_once './common.php';

// check if db has user or not

$userModel = new Users();
$firstUser = $userModel->getFirstUser();
if (empty($firstUser)) {
    // if db does not have user -> create default first user -> redirect to login page
    // create default user
    $userData = [
        'username' => 'admin',
        'password' => encryptPassword('Admin99'),
        'email' => 'admin@gmail.com',
        'first_name' => 'Dao',
        'last_name' => 'Dat'
    ];
    $userModel->createUser($userData);
}

// redirect to login page
redirect('../views/backend/login.php');

