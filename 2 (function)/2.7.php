<?php

function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}

// printN(1);
//recursive function //recursion  

function printNumber($counter,$end,$stp=2){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stp;
    printNumber($counter,$end,$stp);
}

printNumber(100,40,5);