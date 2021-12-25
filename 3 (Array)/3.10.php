<?php

//plain array
$fruits = array('mango','jam','apple','banana','orange','berry');

//associative array
$random = array("a"=>10,"b"=>20,"c"=>30,"d"=>40,10=>70,"e"=>80);


// $someFruits = array_slice($fruits,2);
// $someFruits = array_slice($fruits,2,2);
// $someFruits = array_slice($fruits,-4,-2,);
// $someFruits = array_slice($fruits,-4,-2,true);

$randomData = array_slice($random,1,null,true);
print_r($randomData);