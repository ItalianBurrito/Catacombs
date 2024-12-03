<?php
$servername = "catadb";
$username = "root";
$password = "XFilesHiddenServer";
$dbname = "cataDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Conn3ection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
