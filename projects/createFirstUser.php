<?php

use models\Users;

require_once './common.php';

// check if db has user or not

$userModel = new Users();
$firstUser = $userModel->getFirstUser();

if (empty($firstUser)) {
    // if db does not have user -> create default first user -> redirect to login page
    // create default user
    $userData = [
        'username' => 'admin',
        'password' => encryptPassword('admin'),
        'email' => 'admin@localhost',
        'first_name' => 'Admin',
        'last_name' => 'System'
    ];
    $userModel->createUser($userData);
}

// redirect to login page
redirectToLogin();

