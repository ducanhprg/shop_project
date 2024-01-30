
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indexes</title>
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

<?php
    $viewDirectory = './views';
    $views = scandir($viewDirectory);
    foreach ($views as $view) {
        if ($view != '.' && $view != '..') {
            echo "<h1>$view</h1>";
            echo "<ul>";
            $pages = scandir("$viewDirectory/$view");
            foreach ($pages as $page) {
                if ($page  != '.' && $page != '..' && pathinfo($page, PATHINFO_EXTENSION) == 'php') {
                    if ($page == 'index.php') {
                        continue;
                    }
                    // Display the PHP file name as a hyperlink
                    echo "<li><a href='./views/$view/$page'>- $page</a></li>";
                }
            }
            echo "</ul>";
        }
    }
?>
</body>
</html>
