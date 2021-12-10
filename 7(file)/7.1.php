<?php
$filename = "E:/Xampp/htdocs/php-exercise/7(file)/data/file1.txt";
if(is_readable($filename)){

$fp = fopen($filename,'r');
while($line = fgets($fp)){
    echo $line;
}
// rewind($fp);
// fseek($fp,-5,SEEK_END);
// while($line = fgets($fp,4)){
//     echo $line."-";
// }

// $line = fgets($fp);
// echo $line;

// $line = fgets($fp);
// echo $line;
fclose($fp);

$data = file($filename);
echo $data[1];
print_r($data);

echo file_get_contents($filename);

}