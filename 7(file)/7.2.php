<?php
$filename = "E:\\Xampp\\htdocs\\php-exercise\\7(file)\\data\\file2.txt";

if(is_writable($filename)){
// $existngData = file_get_contents($filename);

$fp = fopen($filename, "a");
// fwrite($fp, $existngData);
// fwrite($fp, "PHP\n");
// fwrite($fp, "Javascript\n");
// fwrite($fp, "GoLang\n");
// fwrite($fp, "Java\n");
fwrite($fp, "C\n");
fwrite($fp, "C++\n");
fwrite($fp, "Python\n");

fclose($fp);
}
