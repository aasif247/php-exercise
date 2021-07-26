<?php

class Human{
    public $name;

    function __construct($personName){
        echo "New Human Object is created\n";
        $this->name = $personName;
    }

    function sayHi(){
        echo "Asif\n";
        $this->sayName();
    }

    function sayName(){
        echo "My Name is {$this->name}\n";
    }
}

$h1 = new Human("Asif");
$h2 = new Human("Arif");
$h1->sayHi();
$h2->sayHi();
//$h1->name="Asif\n";