<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/common.php';
/*require_once $_SERVER['DOCUMENT_ROOT'] . '/views/backend/common/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/backend/common/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/backend/common/footer.php';*/
global $controllerBasePath;

?>

<style>
    .header {
        background-color: #0F0E0E;
        color: white;
        text-align: center;
        display: flex;
        justify-content: space-between;
        padding: .5rem;
        border-bottom: 1px solid white;
    }

    .no-decoration {
        color: white;
        text-decoration: none
    }

    .menu {
        width: 15%;
        background-color: #0F0E0E;
        color: white;
    }

    .menu ul {
        padding-inline-start: 10%
    }

    .menu ul li {
        list-style-type: none;
        padding: 5px 5px 5px 5px;
        margin: 0 10% 0 0;
    }

    .menu ul li ul li{
        list-style-type: disc;
    }

    .menu ul li a {
        color: white;
        text-decoration: none;
        border-bottom: 1px solid white;
    }

    .main-content {
        width: 85%;
        height: 100%
    }

    .no-display {
        display: none;
    }
</style>


<div>

    <div id="backend-header" class="header">
        <div>
            Welcome <b><a style="color: white; text-decoration: none" href="<?= $controllerBasePath ?>/backend/profile.php"><?= $_SESSION['user']['username'] ?></a></b>
        </div>
        <div style="border:1px solid black;flex-direction: row-reverse;">
            <a class="no-decoration" href="<?= $controllerBasePath ?>/backend/UserLogout.php">Logout</a>
        </div>
    </div>



    <div id="backend-content" style="display: flex; width: 100%; height: 100%">
        <div class="menu">
            <div style="margin: 2% auto;" >
                <ul>
                    <li>
                        <a href="<?= $controllerBasePath ?>/backend/users.php">Users</a>
                    </li>
                    <li>
                        <a href="<?= $controllerBasePath ?>/backend/products.php">Product Management</a>
                        <ul>
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Categories</a></li>
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $controllerBasePath ?>/backend/orders.php">Suppliers</a>
                    </li>
                    <li>
                        <a href="<?= $controllerBasePath ?>/backend/orders.php">Orders</a>
                        <ul>
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Lists</a></li>
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Khieu nai</a></li>
                        </ul>
                    </li>
                    <li>
                        <label id="menu-settings">Settings</label>
                        <ul id="menu-settings-list" class="no-display">
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Roles</a></li>
                            <li><a href="<?= $controllerBasePath ?>/backend/users.php">Permissions</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <div class="main-content">
            <div style="margin: 2% auto; width: 90%; background-color: beige" >
                <label>Content</label>
            </div>
        </div>
    </div>


    <div id="backend-footer" style="text-align: center;">
        <label>Footer</label>
    </div>
</div>

<script>
    document.getElementById("menu-settings").addEventListener("click", function () {
        document.getElementById("menu-settings-list").classList.toggle("no-display");
    })
</script>

