
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Directory Listing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<h1>Project List</h1>
<ul>
    <?php
    $directory = '.'; // Current directory

    // Scan the directory and return an array of all files and directories
    $files = scandir($directory);

    // Loop through each file/directory
    foreach ($files as $file) {
        // Check if the item is a directory and not the current or parent directory indicators
        if ($file != '.' && $file != '..' && is_dir($file)) {
            // Display the directory name as a hyperlink
            echo "<li><a href='./$file'>$file</a></li>";
        }
    }
    ?>
</ul>
</body>
</html>
