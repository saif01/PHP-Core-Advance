<?php


//Recursive Function 

function display($num){

    if($num < 5){
        echo "Number : $num <br>";

        display($num + 1);
    }

}

display(2);