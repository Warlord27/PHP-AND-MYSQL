<?php

echo "welcome to the world of scope in php <hr>";
function printValue(){
// $a = 97; local variable
echo "value of variable is $a";
}

$a = 98;
$b = 9;
global $a,$b;
// global varable
echo "the value of your variable is $a and $b <hr>" ;
echo var_dump($GLOBALS["b"]);
echo var_dump($GLOBALS["a"]);

?>