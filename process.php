<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username']; // Like scanf("%s", name)
    echo "Hello, " . $name . "!";
}
?>
