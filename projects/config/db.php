<?php
// Connection parameters
$servername = 'DOCKER_MYSQL:3306';
$username = 'root';
$password = 'root';
$dbname = 'shop_project';

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}