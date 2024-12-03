<!DOCTYPE html>
<html>
  <body>

    <?php
    #include 'databaseconnection.php';
    $servername = "catadb";
    $username = "root";
    $password = "XFilesHiddenServer";
    $dbname = "cataDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Conn3ection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["UserName"]."</td><td>".$row["Email"]." ".$row["Password"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

    $conn->close();

    ?>

  </body>
</html>
