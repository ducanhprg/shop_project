<?php
    global $contacts;
    $count = 0;
?>
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