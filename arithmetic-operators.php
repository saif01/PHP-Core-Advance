<?php
/*

PHP Arithmetic Operators

Operator 	Name 	        Example 	
+ 	        Addition 	    $x + $y 		
- 	        Subtraction     $x - $y 	 	
* 	        Multiplication 	$x * $y 	 	
/ 	        Division 	    $x / $y 		
% 	        Modulus 	    $x % $y 	Remainder  	
** 	        Exponentiation 	$x ** $y 	Result of raising $x to                                        the $y'th power

*/

$x = 20;
$y = 3;

echo 'Sum of $x and $y Addition<br>';

echo  $x + $y.'<br>';

echo 'Difference of $x and $y  Subtraction<br>';

echo  $x - $y.'<br>';

echo 'Multiplication : '. $x * $y.'<br>';

echo 'Division : '. $x / $y.'<br>';


echo 'Modulus ( Remainder )  : '. $x % $y.'<br>';

echo "Exponentiation (power) :". 20 ** 3 ;

echo '<hr>';
echo '$x + $y * 2 :==== ';
echo  $x + $y * 2;

echo '<br>($x + $y) * 2 :==== ';
echo  ($x + $y) * 2;