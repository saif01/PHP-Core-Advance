<?php
/*
The while loop - Loops through a block of code as long as the specified condition is true

Syntax
while (condition is true) {
  code to be executed;
} 

*/


$a = 1;

while($a <= 5)
{
    echo $a.': This is while Loop <br>';
    //$a = $a+1;
    $a++;
}

echo '<hr>';

$x = 5;

while( $x >= 1 ){

    echo $x.': This While Loop By Decrement <br>';
    $x--;
}
