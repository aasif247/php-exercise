<?php

$name ="Hello world";
$length = strlen($name)-1;
for($i=$length;$i>=0;$i--){
    echo $name[$i];
}

echo PHP_EOL;

$rev = strrev($name);
echo $rev;

echo PHP_EOL;

$length = strlen($name);
for($i =1; $i<=$length; $i++){
    echo $name[$i * -1];
} 