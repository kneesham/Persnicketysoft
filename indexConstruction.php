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
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="helloworld.css"></link>
    <meta charset="utf-8">
    <title>hello php</title>
  </head>
  <body>
    <div class="table">

      <?php
      // $sql = "SELECT * FROM Users";
      // $result = $conn->query($sql);
      //
      // if ($result->num_rows > 0) {
      //     // output data of each row
      //     while($row = $result->fetch_assoc()) {
      //         echo "id: " . $row["userid"]. " - Name: " . $row["fname"]. "  -last name " . $row["lname"]. "<br>";
      //     }
      // } else {
      //     echo "0 results";
      // }
       ?>

    </div>
////////////////////////////////////////////////////////////////////////////////
    <?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','peter','abc123','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"persnid1_persnickety_DB");
$sql="SELECT * FROM User WHERE userid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['mi'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>


  </body>
</html>



<?php

$conn->close();  ?>
