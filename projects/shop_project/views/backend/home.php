<?php
require_once '../../common.php';
global $controllerBasePath;
$userModel = new Users();
$listUser = $userModel->getAllUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
<?php if ($_SESSION['admin'] == true) : ?>
    <h2>Welcome: <?= $_SESSION['user']['username'] ?> (<a href="../../controllers/backend/UserLogoutController.php">Logout</a>)
    </h2>
    <h1>List Member</h1>
    <p><a href="./createUser.php">Add Member</a></p>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>email</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($listUser as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['first_name'] . ' ' . $user['last_name'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="./updateUser.php?id=<?= $user['id'] ?>">Edit</a>
                        <a href="../../controllers/backend/DeleteUserController.php?id=<?= $user['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>
