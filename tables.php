<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested loop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <table class="table table-hover">
    <?php

        for($i=1;$i<=10;$i++)
        {
            echo "<tr>";
            for($j=1;$j<=10;$j++)
            {
                echo "<td>";
                echo $i*$j;
                echo "</td>";

            }     
            echo "<tr/>";
        }
    ?>
    </table>
</body>
</html>