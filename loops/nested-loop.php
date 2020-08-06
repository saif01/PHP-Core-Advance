<?php
/*

Nesting Loops

nested loop is a loop within a loop, an inner loop within the body of an outer one.

*/

for($a = 1; $a <= 5; $a++ )
{
    for($b = 1; $b <= $a; $b++ ){
        echo " *";
    }

    echo "<br>";
}

echo "<br><br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo " * ";
    }
    echo '<br />';
}

echo "<hr>";


for( $x= 1; $x <= 100; $x = $x + 10 ){

    for( $y = $x; $y < $x + 10; $y++){
        echo $y . "  ";
    }
    echo "<br>";
}   
