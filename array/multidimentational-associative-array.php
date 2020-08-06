<?php

/*
PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.
PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. 
However, arrays more than three levels deep are hard to manage for most people.
*/

// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );


$cars = [

    "first"=>[
        "s"    => "Volvo",
        "a"     => 22,
        "f"     => 18
    ],
    "second"=>[
        "s"    => "BMW",
        "a"     => 15,
        "f"     => 13
    ],
    "third"=>[
        "s"    => "Saab",
        "a"     => 2,
        "f"     => 5.5
    ],
  
];

echo $cars["first"]["s"];

echo "<pre>";
print_r($cars);



echo "<hr> By Foreach loop <br>";

foreach($cars as $key => $value ){
    echo "index : ". $key ." --<br>"; 

    foreach($value as $item){

        echo "----value : ". $item ."<br>"; 
    }

    echo "<br>";

}






