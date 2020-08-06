<?php
/*
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus

*/



$x1=100;
$x2=200;
$x3=300;
$x4=400;
$x5=500;

$x1     += 100;
echo " $x1 <br />";
$x2     -= 200;
echo " $x2 <br />";
$x3     *= 300;
echo " $x3 <br />";
$x4     /= 400;
echo " $x4 <br />";
$x5     %= 500;
echo " $x5 <br />";
$x=     ($y=11)+9;
echo " Value of x & y is :  $x  $y <br />";