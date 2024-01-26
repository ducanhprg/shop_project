<?php 
  $root = $_SERVER['DOCUMENT_ROOT'];
  require_once "$root/shop_project/common.php";

  $userModel = new Users();
  $usersData = $userModel->getAllUsers();
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

      button {
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
                <td class="<?php echo $user['status'] == 1 ? 'status-active' : 'status-inactive'; ?>">
                    <?php echo $user['status'] == 1 ? 'Active' : 'Inactive'; ?>
                    <button>Delete</button>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </table>
  </body>
</html>