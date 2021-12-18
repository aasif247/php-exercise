<?php
class ParentClass{

    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi form {$this->name}\n";
    }
    
    function sayHi2(){
        echo "His name is {$this->name}\n";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi2();
        echo "Hello\n";
    }
}

$ChildClass = new ChildClass('Asif');