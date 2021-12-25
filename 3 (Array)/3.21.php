<?php

$name =array('a'=>'asif', 'b'=>'kabir','c'=>'Naim');
$tmp_name = $name;
shuffle($tmp_name);
print_r($tmp_name);
echo "\n";
$key = array_rand($name);
print_r($key);
echo "\n";
print_r($name[$key]);