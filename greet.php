<?php

function greet(?string $name) {

if ($name === null) {

        echo "Hello, anonymous!";

 } else {

        echo "Hello, $name!";

  }

}

greet(null);

?>