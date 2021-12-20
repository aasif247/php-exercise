<?php

class A{
    static function sayHi(){
        echo "Hello from A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hello from B\n";
        parent::sayHi();
    }
}

B::sayHi();