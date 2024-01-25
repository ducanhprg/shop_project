<?php
require_once '../../common.php';
require_once '../../models/Users.php';
if (isset($_POST['btn-add-member'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $userData = [
        'username' => $username,
        'password' => encryptPassword($password),
        'email' => $email,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'phone' => $phone,
        'status' => $status
    ];

    $addUser = new Users();
    $addUser->createUser($userData);

    redirect('../../controllers/backend/login.php');
}
