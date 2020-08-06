<?php

//factorial  3 : 3*2*1 = 6

// f(n) = n * f(n-1)


function factorial($num){

    if($num == 0){
        return 1;
    }else{
        return ( $num * ( factorial($num - 1) ) );
    }
}


echo factorial(5);