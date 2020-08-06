<?php
/*
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

Syntax
do {
  code to be executed;
} while (condition is true); 

*/


$a = 1;

do{
    echo $a. ': This is Do-While Loop <br>';
    $a ++;
}while($a <= 10);