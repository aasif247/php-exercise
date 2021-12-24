<?php

$foods = [
 
    'vegetables' =>'carrot,tomato,potato',
    'fruits' =>'mango,banana,apple',
    'drinks' =>'sprite,coke,drinko',

];

//---add new elment in an array ----
$foods['drinks'] .= ",Lemonade";

//---This way don't work for associative array

// $n = count($foods);
// for ($i = 0; $i < $n; $i++){
//     echo $foods[$i];
// }

// use foreach for loop in associative array

// foreach($foods as $key=>$value){
//     echo $key."=".$value."\n";
// }


//------Using Array keys-----
// $keys = array_keys($foods);
// print_r($keys);

//-------Using Array Values-----
// $values = array_values($foods);
// print_r($values);

// $keys = array_keys($foods);
// for($i=0;$i<count($keys);$i++){
//     $key = $keys[$i];
//     echo $foods[$key]."\n";
// }

$values = array_values($foods);
for($i=0;$i<count($values);$i++){
    $value = $values[$i];
    echo $value."\n";
}


