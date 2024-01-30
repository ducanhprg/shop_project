<?php
require_once '../../common.php';
// get data from form by method POST
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

// check data & update
if (isset($username) && isset($email) && isset($id)) {
    $userData = [
        'id' => $id,
        'username' => $username,
        'email' => $email
    ];
    $userModel = new Users();
    $userModel->updateUser($userData);
    redirect('../../views/backend/home.php');
}
