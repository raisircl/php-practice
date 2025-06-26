<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ender result</title>
</head>
<body>
    <?php
    $ramage=$_POST["ramage"];
    $anilage=$_POST["anilage"];
    if($ramage>$anilage)
    {
        echo "Ram is elder";
    }
    else
    {
        echo"Anil is elder";
    }
    ?>
</body>
</html>