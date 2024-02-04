<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
global $controllerBasePath;

$userModel = new Users();
$userData = $userModel->findUserByUsername($_POST['updateName']);

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

    <h2>Update user</h2>
    <div>
        <form id="be-update-form" action="<?= $controllerBasePath ?>/backend/UserUpdate.php" method="POST">
            <div>
                <label>Username:</label>
                <div><input type="text" name="username" value="<?= $userData['username'] ?>"></div>
            </div>
            <div>
                <label>Password:</label>
                <div><input type="password" name="password"></div>
            </div>
            <div>
                <label>Email:</label>
                <div><input type="text" name="email" value="<?= $userData['email'] ?>"></div>
            </div>
            <div>
                <label>First name:</label>
                <div><input type="text" name="first_name" value="<?= $userData['first_name'] ?>"></div>
            </div>
            <div>
                <label>Last name:</label>
                <div><input type="text" name="last_name" value="<?= $userData['last_name'] ?>"></div>
            </div>
            <div>
                <label>Phone:</label>
                <div><input type="text" name="phone" value="<?= $userData['phone'] ?>"></div>
            </div>
            <div><br/><button type="submit">Update</button></div>
        </form>
    </div>
</div>