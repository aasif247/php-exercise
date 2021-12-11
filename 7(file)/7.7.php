<?php
$filename = "E:\\Xampp\htdocs\php-exercise\\7(file)\\data\\file7.txt";

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

$student = array(
    'fanme' => 'Momin',
    'lname' => 'Hossen',
    'age' => 16,
    'class' => 3,
    'roll' => 21
);

// $data = serialize($students);
// file_put_contents($filename, $data,LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allstudents = unserialize($dataFromFile);
print_r($allstudents);

//add 1 data
// array_push($allstudents, $student);
// $data = serialize($allstudents);
// file_put_contents($filename, $data,LOCK_EX);

//remove 1 data
// unset($allstudents[1]);
// $data = serialize($allstudents);
// file_put_contents($filename, $data,LOCK_EX);

