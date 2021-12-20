<?php

define('Name','Asif');
// const CITY="Barisal\n";

class MyClass{
    const CITY = "Chittagong\n";

    function sayHi(){
        echo "Hello from " .self::CITY;
    }
}

$m = new MyClass(); 
$m->sayHi();
echo MyClass::CITY;