<?php
$string = "Quick Red Fox fox jumps over the lazy dog";
 
$replaceString = str_ireplace(array('Red','fox'),array('green','dog'),$string,$count);
echo $replaceString;
echo PHP_EOL;
echo "Total replacement: {$count}";

// str_replcae -> case sensitive
// str_ireplcae -> case insensitive