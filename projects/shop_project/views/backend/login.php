<?php
require_once '../../common.php';
    global $controllerBasePath;
?>

<div>
    <?php if (isset($_SESSION['error'])) : ?>
        <span style="color: red"><?= $_SESSION['error']['fail'] ?></span>
    <?php endif; ?>

    <h1>Login</h1>
    <div>
        <form id="be-login-form" action="<?= $controllerBasePath ?>/backend/UserLogin.php" method="POST">
            <div>
                <label>Username:</label>
                <div><input type="text" name="username" id="be-login-form-username"></div>
            </div>
            <?php if (isset($_SESSION['error']['username'])) : ?>
                <span style="color: red"><?= $_SESSION['error']['username'] ?></span>
            <?php endif; ?>
            <div>
                <label>Password:</label>
                <div><input type="password" name="password" id="be-login-form-password"></div>
            </div>
            <?php if (isset($_SESSION['error']['password'])) : ?>
                <span style="color: red"><?= $_SESSION['error']['password'] ?></span>
            <?php endif; ?>
            <div><button type="submit">Login</button> </div>
        </form>
    </div>
</div>