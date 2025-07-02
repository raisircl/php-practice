<?php
    function msg() 
    {
        echo "Hello User Welcome to function";
    }
    
    msg(); // calling

?>

<?php

 function welcome_user($username)
    {

    echo "Welcome" . $username. "!" ;
    }
?>

In this example $username is a function parameter.

<?php

welcome_user("Admin");

?>

<?php

function sum($n1=1, $n2=1)
{
    $total=$n1+$n2;
    print_r($total);
}

//sum(100,200);
sum();
?>

