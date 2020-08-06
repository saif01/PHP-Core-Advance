<?php

/*
Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:
*/


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x=>$x_value){

    echo "key = ". $x . "Value = ". $x_value;
    echo "<br>";
}


$cars = [

    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2]
];


echo "<hr> By Foreach loop with list function <br>";


foreach($cars as list($a, $b, $c)){
    echo $a .", ". $b. ", ". $c. "<br>";
}