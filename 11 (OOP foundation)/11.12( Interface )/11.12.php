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

class Human implements BaseHuman{
    function isAlive(){

    }
    function canEat($a,$b){

    }
    function breed(){
        
    }
    function canTalk(){

    }
}

$human = new Human();
// echo $human instanceof BaseHuman;
// echo "\n";
// echo $human instanceof Animal;
// echo "\n";
// echo $human instanceof BaseAnimal;

$cat = new Animal();
echo $cat instanceof BaseHuman;
echo $cat instanceof BaseAnimal;