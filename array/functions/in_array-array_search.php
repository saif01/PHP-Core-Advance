<?php

/*

The in_array() function searches an array for a specific value.

Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

Syntax
    in_array(search, array, type)

search 	Required. Specifies the what to search for
array 	Required. Specifies the array to search
type 	Optional. If this parameter is set to TRUE, 
        the in_array() function searches for the search-string and specific type in the array. 


The array_search() function search an array for a value and returns the key.

Syntax
array_search(value, array, strict)

value 	Required. Specifies the value to search for
array 	Required. Specifies the array to search in
strict 	Optional. If this parameter is set to TRUE, 
        then this function will search for identical elements in the array. Possible values:
            true
            false - Default

When set to true, the number 5 is not the same as the string 5 (See example 2)


*/

$people = array("Peter", "Joe", "Glenn", "Cleveland", "55");

//Print index of array value
echo "Value Index : ". array_search("Glenn", $people)."<br>";

//Print 0/1
echo in_array("Glenn", $people)."<br>";

if (in_array(55, $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

echo "<hr>";
  if (in_array(55, $people, 1))
  {
    echo "Match found";
  }
else
  {
    echo "Match not found";
  }