<?php
session_start();

$secretKey = '123456789';

$controllerBasePath = 'http://localhost/shop_project/controllers';
$viewBasePath = 'http://localhost/shop_project/views';


// get root path
$root = $_SERVER['DOCUMENT_ROOT'];

// get db connection
require_once("$root/shop_project/config/db.php");

// get services
$servicesDirectory = "$root/shop_project/services";
requirePHPFiles($servicesDirectory);

$modelDirectory = "$root/shop_project/models";
requirePHPFiles($modelDirectory);











function redirectToLogin() {
    global $viewBasePath;
    header("Location: $viewBasePath/backend/login.php");
}

function encryptPassword(string $password): string
{
    global $secretKey;
    return hash_hmac('sha256', $password, $secretKey);
}

function requirePHPFiles($directory): void
{
    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $filePath = "$directory/$file";
            if (is_dir($filePath)) {
                // Recursive call for subdirectories
                requirePHPFiles($filePath);
            } else if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
                require_once($filePath);
            }
        }
    }
}