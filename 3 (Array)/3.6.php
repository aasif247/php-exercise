<?php
$student = array(
    'fname' => 'Asif',
    'lname' => 'Talukdar',
    'age' => '25',
    'class' => '10',
    'section' => 'C',
);

// print_r($student);
// echo $student['fname']." ".$student['lname']."\n";
// printf("%s %s \n",$student['fname'],$student['lname']);

// echo join('',$student);

//----Serialized---------

// echo serialize($student);

// $serialized = serialize($student);
// $newStudent = unserialize($serialized);

// print_r($newStudent);

//--------JSON Formate
$jsondata = json_encode($student);
echo $jsondata;
$student2 = json_decode($jsondata,true);
print_r($student2);