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

    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2]
];

echo $cars[0][1];

echo "<pre>";
print_r($cars);

echo "<hr> By For loop <br>";

for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<hr> By Foreach loop <br>";

foreach($cars as $key => $value ){
    echo "index : ". $key ." --<br>"; 

    foreach($value as $item){

        echo "----value : ". $item ."<br>"; 
    }

    echo "<br>";

}



