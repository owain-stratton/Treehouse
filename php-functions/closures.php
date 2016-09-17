<?php

$name = 'Friend';
$greet = function() use ($name) {
   echo "Hello There, $name\n";
};
$greet();

?>
