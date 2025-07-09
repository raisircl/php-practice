<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="process.php">

    <input type="text" name="username">

    <input type="password" name="password">
    <h4 style="color: red;">
    <?php
        if (isset($_SESSION["errormsg"])) 
        {
            echo $_SESSION["errormsg"];
            $_SESSION["errormsg"]="";
        }    
    
    ?>

    </h4>
    <input type="submit" value="Submit">

    </form>
</body>
</html>