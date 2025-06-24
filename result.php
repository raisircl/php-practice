<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Your Result is </h1>
    <h2>Value of N1 is: 
        <?php
            $n1=$_GET["n1"];
            echo $n1;
        ?>
    </h2>
    <h2>Value of N2 is: 
        <?php
            $n2=$_GET["n2"];
            echo $n2;
        ?>
    </h2>
    <h2>Sum is: 
        <?php
            $r=$n1+$n2;
            echo $r;
        ?>
    </h2>
</body>
</html>