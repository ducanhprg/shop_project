<?php
    if ($_POST['submit']) {
        // add the contact values to the contacts.txt file
        // if exactly same name exists, only update phone number if new number is different
    }

    $contacts = [
        ['name' => 'John Smith', 'phone' => '555-555-5555'],
    ];

    // get contacts from contacts.txt
    // update $contacts array with contacts from contacts.txt
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
            <tr>
                <?php foreach ($contacts as $index => $contact): ?>
                    <td><?= $index + 1 ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['phone'] ?></td>
                <?php endforeach ?>
            </tr>
        </table>

        <h4>Add a Contact</h4>
        <form action="add_contact.php" method="post">
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
