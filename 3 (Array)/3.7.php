<?php


//copy by value
//deep copy

$person = array('fname' => 'Hello','lname'=>'World');
$newperson = $person;
$newperson['lname']='Pluto';

// print_r($person);
// print_r($newperson);


function printData(&$person){
    $person['fname'] .= " Changed";
    print_r($person);
}

printData($person);
print_r($person);