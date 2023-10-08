<html>
<body>

<form action="save.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
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

$sql = "SELECT code,name, quantity, price FROM article WHERE code=".$_REQUEST['code'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    $row = $result->fetch_assoc();
    echo $row("name");
    
} else {
    echo "0 results";
}

$conn->close();

?>
</body>
</html>