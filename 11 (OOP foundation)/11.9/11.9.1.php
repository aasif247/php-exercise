<?php
abstract class MyCLass{
    function sayHi(){
        echo "Hi\n";
    }

    abstract public function sayName($name);
}

class MyCar extends MyCLass{
    function sayName($name){
        echo "My car name is Corola\n";
    }

    function sayHi(){
        echo "Hi Asif\n";
    }
}

$car = new MyCar();
// $car->sayName();
$car->sayHi();
