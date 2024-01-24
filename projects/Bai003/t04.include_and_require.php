<?php

// Page settings
$fileName = 't04.contacts.txt';
$formAction = 't04.include_and_require.php';

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
?>

<html lang="EN">
<?php include_once 't04_01.include_header.php' ?>
<body>

<?php require_once 't04_03.contact_list.php' ?>

<?php require 't04_02.require_form.php' ?>

</body>
</html>
