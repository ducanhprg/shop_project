<?php

use models\Roles;

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';

$roleModel = new Roles();
$roleModel->deleteRole($_POST['deleteName']);
header("Location: $viewBasePath/backend/rolesManagement.php");