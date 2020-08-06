<?php
/*

PHP - Sort Functions For Arrays

In this chapter, we will go through the following PHP array sort functions:

    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key


*/

//arrays
$cars = array("Volvo", "BMW", "Toyota");

print_r($cars);
echo "<hr>sort() - sort arrays in ascending order";
sort($cars);
print_r($cars);

echo "<hr>rsort() - sort arrays in descending order";
rsort($cars);
print_r($cars);

echo "<hr>asort() - sort associative arrays in ascending order, according to the value";
asort($cars);
print_r($cars);

echo "<hr>ksort() - sort associative arrays in ascending order, according to the key";
ksort($cars);
print_r($cars);



//associative arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


echo "<hr>arsort() - sort associative arrays in descending order, according to the value";
arsort($age);
print_r($age);


echo "<hr>krsort() - sort associative arrays in descending order, according to the value";
krsort($age);
print_r($age);