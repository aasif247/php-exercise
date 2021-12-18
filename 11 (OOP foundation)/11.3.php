<?php
class Human{
    public $name;
    public $age;

    public function __Construct($personName, $personAge=0){

        $this ->name = $personName; 
        $this ->age = $personAge; 

    }
    function sayHi(){
        echo "Hello\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\n";
        
        if ($this->age){
            echo "I am {$this->age} years old\n";
        }else{
            echo "I don't know how old i am\n";
        }
    }
}

$h1 = new Human("Asif", "22");
$h2 = new Human("Nafis");
$h3 = new Human("Fahim","25");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();