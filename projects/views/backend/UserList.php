<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $controllerBasePath;
global $viewBasePath;

$userModel = new Users();
$usersData = $userModel->getAllUsers();

$status = [
  1 => 'Active',
  2 => 'Inactive',
  3 => 'Blocked',
  4 => 'Not confirmed by email',
];

$count = 0;

?>

<html>
<head>
    <title>User Management</title>
</head>
<body>
<h3>User List</h3>
<form action="<?= $viewBasePath ?>/backend/createUser.php" method="POST">
    <div>
        <input type="submit" value="Create new user">
    </div>
</form>
<table id="user-list-table" border="1" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone number</th>
        <th>Email</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Action</th>
    </tr>
    <?php foreach ($usersData as $user): ?>
        <tr>
            <td><?= $count + 1 ?></td>
            <td>
                <form action="<?= $viewBasePath ?>/backend/updateUser.php" method="POST">
                    <input type="hidden" name="updateName" value="<?= $user['username'] ?>">
                    <input type="submit" value="<?= $user['username'] ?>" style="border: 0; background-color: white;"></input>
                </form>

            </td>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['last_name'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['created_date'] ?></td>
            <td><?= $user['updated_date'] ?></td>
            <td>
                <div style="display: flex; width: 100%; height: 100%">
                    <div style="margin: auto;"><?php echo $status[$user['status']] ?></div>
                    <div>
                        <form action="<?= $controllerBasePath ?>/backend/UserRemove.php" method="POST">
                            <input type="hidden" name="deleteName" value="<?= $user['username'] ?>">
                            <input type="submit" value="Delete" style="background-color: red; color: white;">
                        </form>
                    </div>
                </div>
            </td>
            <?php $count++; ?>
        </tr>
    <?php endforeach ?>
</table>

<form action="<?= $viewBasePath ?>/backend/dashboard.php" method="POST">
    <div>
        <input type="submit" value="Back">
    </div>
</form>

</body>
</html>