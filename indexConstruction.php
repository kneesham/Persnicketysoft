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

<?php
$userid = $_GET['userid'];
echo "you passed in " . $userid;
$conn->close();  ?>
