<?php
// Connection parameters
$servername = 'DOCKER_MYSQL:3306';
$username = 'root';
$password = 'root';
$dbname = 'exercises';

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';

// Perform database operations here
// ...

$sql = "CREATE TABLE `exercises`.`users` (`id` INT NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(50) NOT NULL , `phone` INT(11) NOT NULL , PRIMARY KEY (`id`))";
$conn->query($sql);

echo "Table users created successfully";

// Close connection
$conn->close();



// Huong dan ve SQL query
// Connection parameters
$servername = 'DOCKER_MYSQL:3306';
$username = 'root';
$password = 'root';
$dbname = 'exercises';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';

$sqlQuery = ''; // SELECT, UPDATE, INSERT, DELETE -> w3school: https://www.w3schools.com/sql/sql_examples.asp
$conn->query($sqlQuery);

$sqlQuery = ''; // SELECT, UPDATE, INSERT, DELETE -> w3school: https://www.w3schools.com/sql/sql_examples.asp
$conn->query($sqlQuery);

$sqlQuery = ''; // SELECT, UPDATE, INSERT, DELETE -> w3school: https://www.w3schools.com/sql/sql_examples.asp
$conn->query($sqlQuery);

$sqlQuery = ''; // SELECT, UPDATE, INSERT, DELETE -> w3school: https://www.w3schools.com/sql/sql_examples.asp
$conn->query($sqlQuery);

$conn->close();


