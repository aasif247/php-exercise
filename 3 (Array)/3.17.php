<?php

$numbers = array(1,2,3,4,5,6);

function sum($oldValue, $newValue){
    if($newValue%2==1){
        return $oldValue + $newValue;
    }
    return $oldValue ;    
}

$sum = array_reduce($numbers, 'sum');
echo $sum;

echo count($numbers);