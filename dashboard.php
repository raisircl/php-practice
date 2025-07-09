<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <h1>Welcome  
    <?php
    
    if (isset($_SESSION["user"])) {

        echo $_SESSION["user"];

    }
    else
    {
        header("Location: login.php");
        $_SESSION["errormsg"] ="login first for dashboard access";
        
        
    }
    ?>
    to dashboard....</h1>
    
</body>
</html>