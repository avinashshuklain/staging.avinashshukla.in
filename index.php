<?php

include 'home.html';
include 'config.php';

$ip = $_SERVER['REMOTE_ADDR'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table (ip_address)
VALUES ('$ip')";

if ($conn->query($sql) === TRUE) {
  
} else {
}

$conn->close();
?>
