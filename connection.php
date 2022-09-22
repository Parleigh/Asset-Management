<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli("localhost",$username,$password,"greatminds_db");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
  }


?>
