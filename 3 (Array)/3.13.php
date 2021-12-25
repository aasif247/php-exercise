<?php
// $gadgets =array('earphone','headset','powerbank','cable','adapter');

// $gadgets =array('a'=>'earphone','d'=>'headset','c'=>'powerbank','b'=>'cable','adapter','speaker',);


// $partners =array('1'=>"Asif",'2'=>"Musaib",'3'=>"Ifaz",'4'=>"Afif",'5'=>"Mujahid");

//$numbers = array(11,22,55,32,75,5,2,3,1);
$random = array('apple','Apple','banana','Banana','Carrot','carrot' );

// sort($numbers, SORT_STRING);
sort($random,SORT_STRING | SORT_FLAG_CASE);
print_r($random);

// foreach ($gadgets as $gadget){
//     echo $gadget."\n";
// }

// for($i=0;$i<count($numbers);$i++){
//     echo $numbers[$i]."\n";
// };