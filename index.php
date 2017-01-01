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
    <link rel="stylesheet" href="helloworld.css"></link>
    <meta charset="utf-8">
    <title>persnickety</title>
  </head>
  <body>
    <div class="container">
      <div class="window">
        <p>This site is under construction</p>
      </div>

      <div class="textbox">
        <p>welcome to persnicketysoft.com <br>
         this site is currently under construction, please come back soon!</p>
      </div>
    </div>

  </body>
</html>
