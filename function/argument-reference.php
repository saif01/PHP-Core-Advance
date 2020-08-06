<?php

// Passing Arguments by value

function test($a){

    $a ='Arguments by value'; 
    return $a;
}

$str = 'Hello';

echo test($str);

echo '<br>';

echo $str;



echo '<hr>';
// Passing Arguments by Reference

function test2( &$a ){

    $a ='Somthing add'; 
    return $a;
}

$str2 = 'Hello';

echo test2($str2);

echo '<br>';

echo $str2;


