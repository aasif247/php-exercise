<?php
interface BaseAnimal{
    function isAlive();
    function canEat($param1 , $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){

    }
    function canEat($a,$b){

    }
    function breed(){
        
    }
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

abstract class AbstractHuman implements BaseAnimal{
    abstract public function run();

    function canPlay(){
        echo "I am playing";
    }
}

class Human extends AbstractHuman{
    function isAlive(){

    }
    function canEat($a,$b){

    }
    function breed(){
        
    }
    function canTalk(){

    }
    public function run(){

    }
}

$human = new Human();
$human ->canPlay();
// // echo $human instanceof BaseHuman;
// // echo "\n";
// // echo $human instanceof Animal;
// // echo "\n";
// // echo $human instanceof BaseAnimal;

// $cat = new Animal();
// echo $cat instanceof BaseHuman;
// echo $cat instanceof BaseAnimal;
