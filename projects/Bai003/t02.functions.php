<?php

$file = file_get_contents('t02.contacts.txt');
$contacts = json_decode($file, true);

if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $contacts = updateTextFile($name, $phone, $contacts);
}

/**
 * Update name and phone into text file
 * @param string $name
 * @param int $phone
 * @param array $contacts
 * @return array
 */
function updateTextFile(string $name, int $phone, array $contacts): array
{
    $contacts[$name] = $phone;
    $file = json_encode($contacts, JSON_PRETTY_PRINT);
    file_put_contents('t02.contacts.txt', $file);
    return $contacts;
}

// viet function
// function functionName()  -> Camel Case: functionName  | Snake Case: function_name
// {
//      logic code
//      return -> co the return hoac khong return
// }

// goi function
// functionName();


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
<form action="t02.functions.php" method="POST">
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
