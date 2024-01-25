<?php
    require_once '../../common.php';
    global $controllerBasePath;
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
        <h2>Welcome: <?= $_SESSION['adminUsername']?> (<a href="../../controllers/backend/UserLogout.php">Logout</a>)</h2>
        <h1>List Member</h1>
        <p><a href="./createUser.php">Add Member</a></p>
        <table>
            <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Password</th>
                <th>email</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dao Dat</td>
                <td>DfoDat</td>
                <td>Daovandat99</td>
                <td>daodat211099@gmail.com</td>
                <td>
                    <a href="./updateUser.php">Edit</a>
                    <a href="./deleteUser.php">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
