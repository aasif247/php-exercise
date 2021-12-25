<?php

$number1 = array(11,22,55,32,75,5,2,3,1);
$number2 = array(7,13,55,19,75,23,2,27,1);

$gadget1 =array('b'=>'earphone','d'=>'headset','c'=>'powerbank','b'=>'cable','adapter','speaker','bl-headphone');

$gadget2 =array('e'=>'earphone','d'=>'headset','z'=>'powerbank','b'=>'cable','adapter','mic');

$common1 = array_intersect_assoc($gadget1,$gadget2);

$common2 = array_intersect_assoc($number1,$number2);

// print_r($common1);

$diff = array_diff_assoc($gadget1,$gadget2);
print_r($diff);