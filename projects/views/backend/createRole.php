<?php

use models\Permissions;
require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $controllerBasePath;

$perModel = new Permissions();
$persData = $perModel->getAllPermissions();
?>

<div>
    <div>
        <?php
            if ($_SESSION['error']) {
                echo '<label id="error-message">'. $_SESSION['error'] .'</label>';
                unset($_SESSION['error']);
            }
        ?>
    </div>

    <h2>Create new role</h2>
    <div>
        <form id="be-signup-form" action="<?= $controllerBasePath ?>/backend/RoleCreate.php" method="POST">
            <div>
                <label>Name:</label>
                <div><input type="text" name="name"></div>
            </div>
            <div>
                <label>Sapo:</label>
                <div><input type="text" name="sapo"></div>
            </div>
            <div>
                <label>Created by:</label>
                <div><input type="text" name="created_by" value="<?= $_SESSION['user']['id'] ?>"></div>
            </div>
            <div>
                <label>Updated by:</label>
                <div><input type="text" name="updated_by" value="<?= $_SESSION['user']['id'] ?>"></div>
            </div><br/>
            <?php foreach ($persData as $per): ?>
                <input type="checkbox" name="<?= $per['sapo']?>">
                <label> <?php echo $per['name'] ?> </label><br>
            <?php endforeach; ?>
            <div><br/>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

<form action="<?= $viewBasePath ?>/backend/rolesManagement.php" method="POST">
    <div>
        <input type="submit" value="Back">
    </div>
</form>