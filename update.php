<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="save.php" method="post">


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
    echo "<label for='fname'>code</label>";
    echo "<input type='text'  name='code' value='".$_REQUEST["code"]."' >";
    
    echo "<label for='fname'>Name</label>";
    echo "<input type='text'  name='name' value='".$row["name"]."' >";

    echo "<label for='fname'>Quantity</label>";
    echo "<input type='text'  name='quantity' value='".$row["quantity"]."' >";

    echo "<label for='fname'>Price</label>";
    echo "<input type='text'  name='price' value='".$row["price"]."' >";

} else {
    echo "0 results";
}

$conn->close();

?>
 <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


