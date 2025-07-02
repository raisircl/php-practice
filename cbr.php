<?php

function fun(&$num)
{
    $num=300;
}
function main()
{
    $x=100;

    echo "before call X=".$x;
    
    fun($x);
    
    echo "after call X=".$x;
    
}
main();
?>