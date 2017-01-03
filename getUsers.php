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
<script>
$(document).ready(function functionName() {
  $("#div1").html("hello world");

});

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        $.ajax({
    method: "GET",
    url: "../test.php",
    data: { name: "John", location: "Boston" }
  })
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
});

}

</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<?php	
echo "<option value=''>Select a person:</option>";

$sql = 'SELECT * FROM Users';
$result = mysqli_query($conn,$sql) or die(mysqli_error($dbname));
while ($row = mysqli_fetch_array($result) or die(mysqli_error($dbname)) )
{
echo "<option value=" . $row['userid'] . ">" . $row['fname'] . $row['mi'] . $row['lname'] . "</option>";
}

$conn->close(); 
?>
</select>

<br>



</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<div id="div1">
0
</div>

</body>
</html>

