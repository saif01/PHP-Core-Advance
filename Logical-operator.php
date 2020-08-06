<?php

/*

and	    And	    $x and $y	True if both $x and $y are true	
or	    Or	    $x or $y	True if either $x or $y is true	
xor	    Xor	    $x xor $y	True if either $x or $y is true, but not both	
&&	    And	    $x && $y	True if both $x and $y are true	
||	    Or	    $x || $y	True if either $x or $y is true	
!	    Not	    !$x	        True if $x is not true

*/

$x = 100;  
$y = 50;

echo '$x == 100 xor $y == 80 <br>';

if ($x == 100 xor $y == 80) {
    echo "one condition false then gives is true, but not both";
}