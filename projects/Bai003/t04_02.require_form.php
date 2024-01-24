<h4>Add a Contact</h4>
<?php global $formAction; ?>
<form action="<?= $formAction ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">

        <input type="submit" value="Add Contact">
    </div>
</form>