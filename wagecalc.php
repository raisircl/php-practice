<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wage</title>
</head>
<body>
   
    <?php
        $hrs=$_POST["hrs"];
        $wage=0;
        if($hrs==8)
        {
            $wage=250;
        }
        else if($hrs>8 && $hrs<=10)
        {
            $wage=250+($hrs-8)*50;
        }
        else if($hrs>10 && $hrs<=12)
        {
            $wage=350+($hrs-10)*75;
        }
        else if($hrs>12 && $hrs<=14)
        {
            $wage=500+($hrs-12)*100;
        }

    ?>
    <h1> Your wage is :
        <?php
        echo $wage;

        ?>
    </h1>
</body>
</html>