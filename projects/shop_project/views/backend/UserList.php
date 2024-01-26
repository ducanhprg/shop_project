<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/shop_project/common.php";
    global $controllerBasePath;
    global $viewBasePath;

    $userModel = new Users();
    $usersData = $userModel->getAllUsers();

    $count = 0;

?>

<html>
    <head>
        <title>User Management</title>
    </head>
    <body>
        <h3>User List</h3>
        <form action="<?= $viewBasePath ?>/backend/signup.php" method="POST">
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
                <th>Action</th>
            </tr>
            <?php foreach ($usersData as $user): ?>
            <tr>
                <td><?= $count + 1 ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['first_name'] ?></td>
                <td><?= $user['last_name'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <button>Active</button>
                    <form action="<?= $controllerBasePath ?>/backend/UserRemove.php" method="POST">
                        <div>
                            <input type="hidden" name="deleteName" value="<?= $user['username'] ?>">
                            <input type="submit" value="Delete" style="background-color: red; color: white;">
                        </div>
                    </form>
                </td>
                <?php $count++; ?>
            </tr>
            <?php endforeach ?>
        </table>

        
    </body>
</html>