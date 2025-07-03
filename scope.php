<?php
$x = 20;
function myFunction() {
  echo $GLOBALS['x']; // Accessing local variable
}

myFunction(); // Outputs: 20

echo $x; // This will cause an error since $localVar is not accessible outside the function.

?>