<?php 
  $root = $_SERVER['DOCUMENT_ROOT'];
  require_once "$root/shop_project/common.php";

  $userModel = new Users();
  $usersData = $userModel->getAllUsers();
  global $viewBasePath;
?>


<html>
  <head>
    <title>User Management</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
      }
      .status-active {
        color: green;
      }

      .status-inactive {
        color: red;
      }

      .status-blocked {
        color: black;
      }

      .status-not-confirmed {
        color: yellow;
      }


      .delete-button {
        background-color: red;
        color: white;
        border: 0;
        border-radius: 5px;
      }
    </style>
  </head>

  <body>
    <h2>User List</h2>
    <table>
      <tr>
        <th>#</th>
        <th>Username</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
      <?php foreach ($usersData as $user): ?>
            <tr>
                <td><?=$user['id']; ?></td>
                <td><?=$user['username']; ?></td>
                <td><?=$user['first_name']; ?></td>
                <td><?=$user['last_name']; ?></td>
                <td><?=$user['email']; ?></td>
                <td><?=$user['phone']; ?></td>
                <td>
                  <?php
                      switch ($user['status']) {
                        case 1:
                          echo '<span class="status-active">Active</span>';
                          break;
                        case 2:
                          echo '<span class="status-inactive">Inactive</span>';
                          break;
                        case 3:
                          echo '<span class="status-blocked">Blocked</span>';
                          break;
                        case 4:
                          echo '<span class="status-not-confirmed">Not confirmed by email</span>';
                          break;
                      }
                    ?>
                  <button class="list-button">Delete</button>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </table>
    <form action="<?= $viewBasePath ?>/backend/createUser.php">
      <button type="submit" style="margin-top: 10px;" >
        Create new User
      </button>
    </form>
  </body>
</html>