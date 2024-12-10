<?php
$servername = "catadb";
$DB_USER = "root";
$DB_PASSWORD = "XFilesHiddenServer";
$dbname = "cataDB";

// Create connection
$conn = new mysqli($servername, $DB_USER, $DB_PASSWORD, $dbname);

// Check connection
if (!$conn) {
  die("Conn3ection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
