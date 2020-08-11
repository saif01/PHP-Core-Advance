<?php

/*
PHP count() Function
The count() function returns the number of elements in an array.

array 	Required. Specifies the array
mode 	Optional. Specifies the mode. Possible values:

    0 - Default. Does not count all elements of multidimensional arrays
    1 - Counts the array recursively (counts all the elements of 
    multidimensional arrays)


array_count_values(array)
array 	Required. Specifying the array to count values of


*/

$car=array("Volvo","BMW","Toyota","Volvo");
echo count($car);

echo "<pre>";
print_r ( array_count_values($car) );
echo "<hr>";

$cars=[

    "Volvo"     =>[ "XC60","XC90", "ABC" ],
    "BMW"       =>[ "X3","X5" ],
    "Toyota"    =>[ "Highlander", "ABC" ]
];

echo "Normal sizeof: " . sizeof($cars)."<br>";
echo "Normal count: " . count($cars)."<br>";
echo "Normal count only BMW array : " . count($cars['BMW'])."<br>";
echo "Recursive count: " . count($cars,1). "<br>";

