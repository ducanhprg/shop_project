<?php
// Connection parameters
$servername = "DOCKER_MYSQL";
$username = "root";
$password = "root";
$dbname = "demo";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo

"Connected successfully";

// Perform database operations here
// ...

//$sql = "CREATE TABLE `demo`.`users` (`id` INT NOT NULL AUTO_INCREMENT ,
//`name` VARCHAR(50) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))";
//$conn->query($sql);
//
//echo "Table MyGuests created successfully";
// Close connection
$conn->close();
