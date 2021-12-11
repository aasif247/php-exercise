<?php
$filename = "E:\\Xampp\htdocs\php-exercise\\7(file)\\data\\file8.txt";

$students = array(
    array(
        'fanme' => 'Asif',
        'lname' => 'Talukdar',
        'age' => 20,
        'class' => 5,
        'roll' => 1
    ),
    array(
        'fanme' => 'Arif',
        'lname' => 'Ahmed',
        'age' => 20,
        'class' => 6,
        'roll' => 4
    ),
    array(
        'fanme' => 'Jaber',
        'lname' => 'Ahmed',
        'age' => 20,
        'class' => 9,
        'roll' => 2
    ),
);
// $encodedData = json_encode($students);
// file_put_contents($filename, $encodedData,LOCK_EX);

$data = file_get_contents($filename);
// $allStudents = json_decode($data);
$allStudents = json_decode($data,true);
print_r($allStudents);
// echo $allStudents[0]->fname;
// echo "\n";
echo $allStudents[1]['fanme'];