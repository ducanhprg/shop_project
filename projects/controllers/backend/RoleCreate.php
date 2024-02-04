<?php

use models\Roles;
require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $viewBasePath;

$roleData = $_POST;

$roleModel = new Roles();

if ($roleModel->checkExistedRole($roleData['name'])) {
    $_SESSION['error'] = 'Role already exists';
    redirectToCreateRole();
}


$roleModel->createRole($roleData);

header("Location: $viewBasePath/backend/rolesManagement.php");