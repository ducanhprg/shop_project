<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/shop_project/common.php";
    global $controllerBasePath;

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

    <h2>Create new user</h2>
    <div>
        <form id="be-signup-form" action="<?= $controllerBasePath ?>/backend/UserSignup.php" method="POST">
            <div>
                <label>Username:</label>
                <div><input type="text" name="username"></div>
            </div>
            <div>
                <label>Password:</label>
                <div><input type="password" name="password"></div>
            </div>
            <div>
                <label>Email:</label>
                <div><input type="text" name="email"></div>
            </div>
            <div>
                <label>First name:</label>
                <div><input type="text" name="first_name"></div>
            </div>
            <div>
                <label>Last name:</label>
                <div><input type="text" name="last_name"></div>
            </div>
            <div>
                <label>Phone:</label>
                <div><input type="text" name="phone"></div>
            </div>
            <div><br/><button type="submit">Create</button> </div>
        </form>
    </div>
</div>