<?php

function myCounter() {

static $count = 0;

$count++;

echo $count;

}

myCounter(); // Outputs: 1

myCounter(); // Outputs: 2

myCounter(); // Outputs: 3

?>