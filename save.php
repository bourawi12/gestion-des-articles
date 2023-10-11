<html>
<body>    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "blaaaa".$_POST["code"];
$sql = "UPDATE article SET name='".$_POST["name"]."', quantity=".$_POST["quantity"].",price=".$_POST["price"]." WHERE code=".$_POST["code"];
echo $sql;


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>