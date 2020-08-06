<?php
/*
The for loop - Loops through a block of code a specified number of times.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
} 

*/


for( $a=1; $a <= 10; $a++ ){
    echo $a.': This is For Loop <br>';
}

echo '<hr>';

for( $x=1; $x <= 10; $x = $x+2 ){
  echo $x.': This is For Loop <br>';
}


echo '<hr>';

for( $y=10; $y >= 1; $y-- ){
  echo $y.': This is For Loop <br>';
}