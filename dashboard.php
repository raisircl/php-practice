<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <h1>Welcome to 
    <?php
    echo $_SESSION["user"];
    if (isset($_SESSION["user"])) {

        echo $_SESSION["user"];

    }
    else
    {
        echo "<h1>First login</h1>";
    }
    ?>
    dashboard....</h1>
</body>
</html>