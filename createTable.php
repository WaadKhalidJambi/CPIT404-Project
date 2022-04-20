<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "DBase";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE informaion(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone INT(10)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table information created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>