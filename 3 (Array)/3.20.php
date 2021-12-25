<?php
$numbers = range (10,20);
$random = mt_rand(0,10);
// // echo $random;
// echo $numbers[$random]."\n";

// $random = mt_rand(0,10);
// echo $numbers[$random];

$toss = $numbers[$random];
if($toss %2 ==0){
    echo "Head";
}else{
    echo "Tail";
}

shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[3];
echo $randomNumber;