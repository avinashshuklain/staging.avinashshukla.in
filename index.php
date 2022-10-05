<?php
include 'home.html';
$ip = $_SERVER['REMOTE_ADDR'];
$servername = env(servername);
$username = env(username);
$password = env(password);
$dbname = env(dbname);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO logs (ip_address)
VALUES ('$ip')";

if ($conn->query($sql) === TRUE) {
  
} else {
}

$conn->close();
?>
