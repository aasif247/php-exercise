<?php 
// $numbers = array(1,2,3,4,5,6,7,8,9,10);
// $numbers = array();
// for($i=1;$i<11;$i++) {
//     array_push($numbers,$i);
// }

// $numbers = range(1,10,2);
// print_r($numbers);

foreach(range(0,60,11) as $divisibleby11){
    if($divisibleby11 >0){
        echo $divisibleby11."\n";
    } 
}