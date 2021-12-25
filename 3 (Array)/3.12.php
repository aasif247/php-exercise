<?php

//plain array
$fruits = array('mango','jam','apple','banana','orange','berry');

//associative array
$random = array("a"=>10,"b"=>20,"c"=>30,"d"=>40,10=>70,"e"=>80);

// $newFruits1 = array_slice($fruits,2,null,);
// $newRandom1 = array_slice($random,-3,null);

// $arraySum = array_merge($newFruits1,$newRandom1);
// // $arraySum = $newFruits1+$newRandom1;
// print_r($newFruits1);
// print_r($newRandom1);
// print_r($arraySum);

//$randomdata = array_splice($random,2,2,array("x"=>90,"y"=>100,"z"=>120));

$random1 =array_slice($random,0,2,true);
$random2 =array_slice($random,3,null,true);
$random3 =array("m"=>1000,"n"=>2000);

$randomDataCorrectWay = $random1+$random2+$random3;

print_r($random1);
print_r($random2);
print_r($random3);
print_r($randomDataCorrectWay);


