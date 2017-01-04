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
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script> -->
    <link rel="stylesheet" href="helloworld.css"></link>
    <meta charset="utf-8">
    <title>hello php</title>
  </head>
  <body>
    <div id="table" class="table">
  <div id='userLoad'>

  </div>

    </div>
  </body>
</html>

<?php

$conn->close();  ?>
