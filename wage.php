<?php
/*
factory 
wage calc
8hrs -  250
overtime
8-10    50
>10 upto 12     75
>12 upto 14     100 per hour ot
otherwise - invalid

input: 13 hour
8 hrs 250
9 hr   50
10hr   50
11hr   75
12HR   75
---------------
      425
--------------

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Wage Calc</title>
</head>
<body>
    <form action="wagecalc.php" method="POST">
    <label for="hrs">Enter working hours</label>
    <br>
    <input type="text" name="hrs"/>
    <input type="submit" value="Submit"/>
    </form>
</body>
</html>