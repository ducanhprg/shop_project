<?php

$file = fopen('test.txt', 'r');
$fileSize = filesize('test.txt');
echo 'Original text: ' . fread($file, $fileSize);
echo '<br>';
fclose($file);


$file = fopen('test.txt', 'w');
fwrite($file, randomString());
fclose($file);


$file = fopen('test.txt', 'r');
$fileSize = filesize('test.txt');
echo 'Updated text: ' . fread($file, $fileSize);
echo '</br>';
fclose($file);


function randomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, strlen($characters))];
    }

    return $randomString;
}
