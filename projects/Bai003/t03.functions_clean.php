<?php

// Page settings
$fileName = 't03.contacts.txt';
$formAction = 't03.functions_clean.php';

$file = file_get_contents($fileName);
$contacts = json_decode($file, true);

if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    $contacts[$_POST['name']] = $_POST['phone'];
    updateTextFile($contacts);
}

/**
 * Update name and phone into text file
 * @param array $contacts
 * @return void
 */
function updateTextFile(array $contacts): void
{
    global $fileName;
    $file = json_encode($contacts, JSON_PRETTY_PRINT);
    file_put_contents($fileName, $file);
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
<form action="<?= $formAction ?>" method="POST">
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
