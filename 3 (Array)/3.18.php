<?php

$color = array(122,343,543);
$red = $color[0];
$green = $color[1];
$blue = $color[2];

echo $blue;


// 1st way

// $color = array(122,343,543);
// list($red,$green,$blue) = $color;
// echo $blue;

// 2nd way

list($a,$b,$c,$d)= array('asif','alif','abir','anis');
echo $c;