<?php
$filename = "E:\\Xampp\htdocs\php-exercise\\7(file)\\data\\file6.txt";

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

//write

// $fp = fopen($filename, 'w');
// foreach ($students as $student) {
//     $data = sprintf("%s,%s,%d,%d,%d\n", $student['fanme'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//     fwrite($fp, $data);
// }
// fclose($fp);

//write (csv format)

$fp = fopen($filename, 'w');
foreach ($students as $student) {
    fputcsv($fp, $student);
}
fclose($fp);



//read

// $fp = fopen($filename, 'r');
// while($data = fgets($fp)) { 
//     $student = explode(',', $data);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// }
// fclose($fp);

//read (csv format)

// $fp = fopen($filename, 'r');
// while($student = fgetcsv($fp)) { 
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// }
// fclose($fp);


// add new data
$student = array(
    'fanme' => 'Mujahid',
    'lname' => 'Pavel',
    'age' => 25,
    'class' => 7,
    'roll' => 10
);
$fp = fopen($filename, 'a');
fputcsv($fp, $student);
fclose($fp);


// remove old data
$data = file($filename);
unset($data[2]);
print_r($data);
$fp = fopen($filename, 'w');
foreach ($data as $line) {
    fwrite($fp, $line);
}
fclose($fp);
