<?php
$servername = "localhost";
$username = "persnid1_dev";
$password = "Tobori6284";
$dbname = "persnid1_persnickety_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
echo "Connected successfully" . "<br>";


?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="helloworld.css"></link>
    <meta charset="utf-8">
    <title>hello php</title>
  </head>
  <body>
    <div class="table">

      <?php
      $sql = "SELECT * FROM Users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "id: " . $row["userid"]. " - Name: " . $row["fname"]. "  -last name " . $row["lname"]. "<br>";
          }
      } else {
          echo "0 results";
      }
       ?>

    </div>

  </body>
</html>

<?php

$conn->close();  ?>
