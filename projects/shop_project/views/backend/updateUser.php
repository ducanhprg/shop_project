<!DOCTYPE html >
<html lang = "en" >
<head >
    <meta charset = "UTF-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" >
    <title > Update User </title >
</head >
<body >
<div>
    <h1>Update User</h1>
    <form id="" action="../../controllers/backend/UpdateUserController.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <div><input type="text" name="username" id=""></div>
        </div>
        <div>
            <label for="email">Email:</label>
            <div><input type="text" name="email" id=""></div>
        </div>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <div>
            <button type="submit" name="btn-update" id="">Update</button>
        </div>
    </form>
</div>
</body >
</html >
