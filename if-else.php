<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo '<hr>';



/*

Ternary operator

(Condition) ? (Statement1) True : (Statement2) False ;

*/

$age = 20;

echo ( $age > 10 ) ? 'True... Part' : ' False... Part';


?>