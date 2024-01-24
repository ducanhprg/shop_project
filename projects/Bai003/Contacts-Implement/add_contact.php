<?php
    // $_SERVER: contains all server variables
    // $_REQUEST: contains all Http POST and http GET parameters
    // $_POST: contains only POST parameters
    // $_GET: contains only GET parameters
    // $_COOKIE: contains all cookies
    // $_SESSION: contains all session variables
    // $_FILES: contains all uploaded files
    // $_ENV: contains all environment variables

    $file = file_get_contents('contacts.txt');
    $contacts = json_decode($file, true);

    if (!empty($_POST['name']) && !empty($_POST['phone'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        // neu file khong co data
        if (!$contacts) {
            $contacts = [
                $name => $phone,
            ];
        } else { // neu file co data
            // update $contacts array with new contact
            $contacts[$name] = $phone;
        }
        file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
    }

    $count = 0;
?>

<html>
    <head>
        <title>Contact Management</title>
    </head>
    <body>
        <h3>Contact List</h3>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
            <?php foreach ($contacts as $name => $phone): ?>
            <tr>
                <td><?= $count + 1 ?></td>
                <td><?= $name ?></td>
                <td><?= $phone ?></td>
                <?php $count++; ?>
            </tr>
            <?php endforeach ?>
        </table>

        <h4>Add a Contact</h4>
        <form action="add_contact.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">

                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone">

                <input type="submit" value="Add Contact">
            </div>
        </form>
    </body>
</html>
