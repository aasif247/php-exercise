<?php
class Human{
    public $name; 
    function sayHi(){
        echo "Salam\n";
        $this->sayName(); // sayName function er puro property gulo eta peyeche
    }
    
    private function sayName(){
        echo "My name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
$human1->name ="Rubel\n"; // set
$human2->name ="Asif\n"; // set
$human3->name ="Abir\n"; // set
$cat1 = new Cat();
$dog1 = new dog(); 

$human1-> sayHi();
// $human1-> sayName();
// echo $human1->name; // get
// $cat1-> sayHi();
// $dog1-> sayHi();

$human2-> sayHi();
// $human2-> sayName();
// $human3-> sayName();
// echo $human2->name; // get