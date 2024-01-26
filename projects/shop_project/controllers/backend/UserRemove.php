<?php

print_r($_POST['deleteName']);

$userModel = new Users();
echo 111;
$userModel->deleteUser($_POST['deleteName']);
echo 111;

header("Location: $viewBasePath/backend/UserList.php");
echo 111;

