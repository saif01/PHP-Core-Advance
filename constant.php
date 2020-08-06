<?php

/*
A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A valid constant name starts with a letter or underscore (no $ sign before the constant name). Note: Unlike variables, constants are automatically global across the entire script.


Syntax
define(name, value, case-insensitive)

*/



define('test', 50);
//define('test', 10);


echo test;

echo '<br>';

define('abc', 100, true);

echo ABC;
echo '<br>';
echo aBC;
echo '<br>';
echo abC;

