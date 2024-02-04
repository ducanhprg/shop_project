<?php

use models\Roles;

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $controllerBasePath;
global $viewBasePath;

$roleModel = new Roles();
$rolesData = $roleModel->getAllRoles();

$count = 0;
?>

<form action="<?= $viewBasePath ?>/backend/createRole.php" method="POST">
    <div style="margin-right: 0%;">
        <input type="submit" name="create" value="Create new role">
    </div>
</form>

<table id="role-list-table" border="1" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php foreach ($rolesData as $role): ?>
        <tr>
            <td><?= ++$count ?></td>
            <td><?= $role['name'] ?></td>
            <td>
                <div style="display: flex; width: 100%; height: 100%">
                    <div >
                        <form action="<?= $viewBasePath ?>/backend/editRole.php" method="POST">
                            <input type="hidden" name="editName" value="<?= $role['name'] ?>">
                            <input type="submit" value="Edit" style="background-color: red; color: white;">
                        </form>
                    </div>
                    <div>
                        <form action="<?= $controllerBasePath ?>/backend/RoleRemove.php" method="POST">
                            <input type="hidden" name="deleteName" value="<?= $role['name'] ?>">
                            <input type="submit" value="Delete" style="background-color: red; color: white;">
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="<?= $viewBasePath ?>/backend/dashboard.php" method="POST">
    <div>
        <input type="submit" value="Back">
    </div>
</form>