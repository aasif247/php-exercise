<?php

$numbers = array(1,2,3,4,5,6,7,8,9);

//array_walk

function square($num){
    printf("Square of %d is %d \n",$num, $num*$num);
}

array_walk($numbers,'square');

//array_map

function cube($n){
    return $n*$n*$n;
}

$newArray = array_map('cube',$numbers);
print_r($numbers);
print_r($newArray);

//array_filter

function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

$newArray2 = array_filter($numbers,'even'); //callback function
$newArray3 = array_filter($numbers,'odd'); //callback function

print_r($newArray2);
print_r($newArray3);

// filter the name started with 'A'

$name = array('Arif','Hasif','Sabab','Afif','Musu','Shihab','Forhad','Abir');

function filterByA($n){
   return $n[0]=='A';
};

$newPersons = array_filter($name,'filterByA');
print_r($newPersons);