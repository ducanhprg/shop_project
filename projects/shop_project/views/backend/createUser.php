<?php
require_once '../../common.php';
global $controllerBasePath;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>
<body>
<div>
    <h1>Add Member</h1>
    <form id="" action="../../controllers/backend/CreateUser.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <div><input type="text" name="username" id=""></div>
        </div>
        <div>
            <label for="password">Password:</label>
            <div><input type="password" name="password" id=""></div>
        </div>
        <div>
            <label for="email">Email:</label>
            <div><input type="email" name="email" id=""></div>
        </div>
        <div>
            <label for="first_name">First Name:</label>
            <div><input type="text" name="first_name" id=""></div>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <div><input type="text" name="last_name" id=""></div>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <div><input type="number" name="phone" id=""></div>
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
                <option value="3">Blocked</option>
                <option value="4">not comfirmed by email</option>
            </select>
        </div>
        <div>
            <button type="submit" name="btn-add-member" id="">Add</button>
        </div>
    </form>
</div>
</body>
</html>
