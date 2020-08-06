<?php

/*

When a certain condition is true, select a label with goto and immediately 
transfer to a program in another program. Notice the following image: 

*/

echo "This is test 1 <br>";
echo "This is test 2 <br>";
goto abc;
echo "This is test 3<br>";
echo "This is test 4<br>";
echo "This is test 5<br>";
echo "This is test 6<br>";

abc:
echo "This is goto test";

echo "<hr>";

for($a=1; $a <= 10; $a++){
    echo $a . "<br>";
    if($a == 4){
        goto abc2;
    }
}

echo "Thsis another test";

abc2:
echo "this another goto test";


