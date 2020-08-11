<?php
/*
https://www.w3schools.com/php/func_array_replace.asp
https://www.youtube.com/watch?v=_lix9Hfp8AI&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=40

The array_replace() function replaces the values of the first array 
with the values from following arrays.

Tip: You can assign one array to the function, or as many as you like.

If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is (See Example 1 below).

If a key exist in array2 and not in array1, it will be created in array1 (See Example 2 below).

If multiple arrays are used, values from later arrays will overwrite the previous ones (See Example 3 below).

Tip: Use array_replace_recursive() to replace the values of array1 with the values from following arrays recursively.
Syntax
array_replace(array1, array2, array3, ...)

array1 	Required. Specifies an array
array2 	Optional. Specifies an array which will replace the values of array1
array3,... 	Optional. Specifies more arrays to replace the values of array1 and array2, etc. Values from later arrays will overwrite the previous ones.

*/


$a1=array("red","green", "sssss");
$a2=array("blue","yellow");

$new = array_replace($a1,$a2);
echo "<pre>";
print_r($new);

echo "<hr>";
$a1=array("red","green", "aaaa");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
$new2 = array_replace($a1,$a2,$a3);
print_r($new2);

echo "<hr>";


$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));

$result=array_replace_recursive($a1,$a2);
echo "By array_replace_recursive<br>";
print_r($result);

$result=array_replace($a1,$a2);
echo "By array_replace<br>";
print_r($result);