<?php

/*

PHP Break
You have already seen the break statement used in an earlier chapter of this tutorial. 
It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

PHP Continue
The continue statement breaks one iteration (in the loop), 
if a specified condition occurs, and continues with the next iteration in the loop.

*/

for($a = 1; $a <= 10; $a++ ){

    if($a == 3){
        echo "Continue --- ". $a. "<br>";
        continue;
        //break;
    }

    echo "Number : ". $a. "<br>";
}