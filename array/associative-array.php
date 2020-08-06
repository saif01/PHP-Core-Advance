<?php

/*

PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

*/

//$a = array( "s"=>"saif", "a"=> "job", "i"=>"26", "f"=>"bangladesh"  );
$a =  [ "s"=>"saif", "a"=> "job", "i"=>26, "f"=>"bangladesh"  ];

echo $a["f"];
echo "<pre>";
print_r($a);

echo "<hr>";
//Change value
$a["f"] = "China";
$a["i"] = 28.5;

echo $a["f"];
echo "<pre>";
print_r($a);

echo "<hr>";

/*
Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:
*/


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x=>$x_value){

    echo "key = ". $x . ", Value = ". $x_value;
    echo "<br>";
}


