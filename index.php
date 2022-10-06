<?php

include 'home.html';
include 'config.php';
include 'config/app.php';

$ip = $_SERVER['REMOTE_ADDR'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO $table (ip_address,$column1)
VALUES ('$ip','$data1')";

if ($conn->query($sql) === TRUE) {
  
} else {
}

$conn->close();
?>
