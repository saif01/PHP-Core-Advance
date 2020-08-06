<?php

//variable Function

function test(){
    return 'Function Assign in variable and call function by variable name';
}


$a = 'test';
echo $a();



echo '<hr>';

function test2($x){
    return "Function Assign in variable and call function by variable name with argument <br>$x";
}


$a2 = 'test2';

echo $a2('That is argument');


echo '<hr>';

$test_variable = function ($x){
    return "Anonymous function  with argument <br>$x";
};



echo $test_variable("That is argument");

