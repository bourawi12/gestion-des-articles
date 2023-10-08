<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>A Fancy Table</h1>
<form action="welcome.php" method="post"></form>
<table id="customers">
  <tr>
    <th>Code</th>
    <th>Name</th>
    <th>price</th>
    <th>quantity</th>
    <th>action</th>
  </tr>

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

$sql = "SELECT code,name, quantity, price FROM article"; // Remove "code" from the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>: ". $row["code"]. "</td>-<td> name".$row["quantity"]. "</td> -<td> Quantity: ". $row["quantity"]. "</td> -<td> Price: " . $row["price"]. "</td> -<td><a href='update.php?code' target='_blank'>This is a link</a><a href="" target="_blank">This is a link</a></td></tr>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
</table>

</body>
</html>



