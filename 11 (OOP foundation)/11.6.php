<?php

class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is eating\n";
    }
    public function run(){
        echo "{$this->name} is running\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){ //override
    }

    protected function addTitle($title){
        $this->name = $title ." ". $this->name;
    }
}

class Human extends Animal{

    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Hello\n";
    }

}

class Cat extends Animal{

    public function greet(){
        echo "{$this->name} says Meow\n";
    }
}

$a1 = new Animal('Animal');
$a1->eat();


$h1 = new Human('Asif');
$h1->greet();
$h1->eat();

$c1 = new Cat('Tom');
$c1->sleep();
$c1->run();

$h1->run();
$c1->greet();
