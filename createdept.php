<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dname = $_POST['dname']; 
    $loc = $_POST['loc']; 

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

$sql = "INSERT INTO tbldept ( dname, loc)
VALUES ('$dname', '$loc')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully and id is " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>