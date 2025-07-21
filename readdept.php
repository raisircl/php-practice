<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT dno, dname,loc FROM tbldept";

$result = $conn->query($sql);

//print_r($result->fetch_assoc()); die;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "DNo: " . $row["dno"]. " - DName: " . $row["dname"]. "- Loc " . $row["loc"]. "<br>";
  }
} else {
  echo "0 results"; 
}
$conn->close();
?>