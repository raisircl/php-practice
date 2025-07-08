<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username']; 
    $pwd = $_POST['password']; 
    
    if($name==="ram" && $pwd==="sham")
    {
        $_SESSION["user"] = $name;
       header("Location: dashboard.php");     
    }
    else
    {
        echo "invalid user name or pwd";

    }
}
    
?>
