<?php
require_once '../../common.php';
$id = $_GET['id'];
//echo $id;
$userModel = new Users();
$userModel->deleteUser($id);
redirect('../../views/backend/home.php');