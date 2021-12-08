<?php
$string = "quick brown fox fox jumps over the lazy dog";
$posiiton = strpos($string,"over",0);
echo $posiiton;
echo PHP_EOL;
// echo PHP_EOL;
// echo substr($string,12,3);

$name = "asif";
echo strrpos($name,"s"); //i don't know why strrpos isn't work here