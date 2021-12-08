<?php
$string = "Hello,world How,are,you?";
$parts = explode(",", $string);
print_r($parts);

//join
$original = join(" ",$parts);

//implode
$original2 = implode(" ",$parts);

//str_split
$original3 = str_split($string);

echo $original;
echo "\n";
echo $original2;
echo "\n";
print_r($original3);

//sub_str
$count = substr_count($string,'a');
echo $count;

//multiple_delimeter
$original4 = preg_split("/ |,/",$string);
print_r($original4);