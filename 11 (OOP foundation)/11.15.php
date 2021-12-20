<?php

class A{
    protected static $name;
    static function sayHi(){
        self::$name ="asif\n";
        echo "Hello from A\n";
    }
}

class B extends A{
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hello from B\n";
        
    }
}

B::sayHi();
// echo B::$name;