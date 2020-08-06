
<?php

$cars = [

    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2]
];

echo $cars[0][1];

echo "<pre>";
print_r($cars);

echo "<hr> By Foreach loop with list function <br>";


foreach($cars as list($a, $b, $c)){
    echo $a .", ". $b. ", ". $c. "<br>";
}


echo "<hr>Multidimentional associative array By Foreach loop with list function <br>";

$cars2 = [

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

echo "<pre>";
print_r($cars2);

foreach($cars2 as $key => list("s" => $a, "a" => $b, "f" => $c)){


    echo $key. " :<br>";
    echo $a .", ". $b. ", ". $c. "<br><br>";
}