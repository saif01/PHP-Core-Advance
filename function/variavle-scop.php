<?php

//variavel scop Local and Global variable


$x = 10;
$y = 5;

function test(){

    global $x, $y;

    $z= $x+$y;

    echo "Global Variable $z <br>";

}

echo test();

echo "Outside variable $x";