<?php
$filename = "E:\\Xampp\htdocs\php-exercise\\7(file)\\data\\file4.txt";

// $fp = fopen($filename, "r+");
// $fp = fopen($filename, "w+");
$fp = fopen($filename, "a+");
fwrite($fp, "Sylhet\n");
rewind($fp);
fwrite($fp, "Dhaka\n");
$line = fgets($fp);
echo $line;
