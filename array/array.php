<?php

/*

What is an Array?
An array is a special variable, which can hold more than one value at a time.

*/

//$a = array( "red", "yellow", "blue", "green", 500 );

$a = ["red", "yellow", "blue", "green", 500, 15.8 ];

echo $a[0] ."<br>";
echo $a[2] ."<br>";
echo $a[4] ."<br>";

echo "<hr>";

echo "<pre>";
print_r($a);

echo "<hr>";

$b[0] = "aaa";
$b[1] = "bbb";
$b[2] = "ccc";

echo "<pre>";
print_r($b);



