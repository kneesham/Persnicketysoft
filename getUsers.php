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


<html>
<head>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="ajaxJquery.js"></script>
<link rel="stylesheet" href="helloworld.css"></link>


</head>
<body>
<div id="userdiv"> userdiv</div>
<form>

<div id='txtHint'><b>Person info will be listed here...</b></div>
<!-- <div id='div1'>0</div> -->
<select  id="users" name="users">
<?php
echo "<option value=''>Select a person:</option>";

$sql = 'SELECT * FROM Users';
$result = mysqli_query($conn,$sql) or die(mysqli_error($dbname));
while ($row = mysqli_fetch_array($result) or die(mysqli_error($dbname)))
{
echo "<option value=" . $row['userid'] . ">" . $row['fname'] . $row['mi'] . $row['lname'] . "</option>";
$conn->close();
}
?>


</select>
</form>
</body>
</html>
