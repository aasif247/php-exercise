<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName(); // sayName function er puro property gulo eta peyeche 
    }

    private function sayName(){
        echo "My name is {$this->name}";
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

$h1 = new Human();
$h2 = new Human();

$h1->name = "Asif Talukdar\n"; // set
$h1->age = 10; // age er value 10 declare kora jbe but eta class er internal method diye access kora jbe na as age ta class er kono property na
$h2->name = "Abir\n"; // set
echo $h1->age ;

$c1 = new Cat();
$d1 = new Dog();


$h1->sayHi(); // sayName private howar poreo jehetu eta sayHi te access ache tai eta call krte prbe

//$h1->sayName(); // sayName private thakle call kora jbe na 
//echo $h1->name; // get

$h2->sayHi();
//$h1->sayName();
//echo $h1->name; // get


//$c1->sayHi();
//$d1->sayHi();