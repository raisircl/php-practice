<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to php</title>
</head>
<body>
    <h1>
    <?php
       echo "Hello User";
     ?>
    </h1>
    <h2>
        <?php
            echo "Welcome to PHP"; 
        ?>
        
    </h2>
    <h3>
        <?php
            // $varname use to store values. Due Dynamic variable type decide by value
            $n1=100;
            $n2=200;
            $r=$n1+$n2;
            echo "Sum =". $r; // . is used for concat    
        ?>

    </h3>
</body>
</html>