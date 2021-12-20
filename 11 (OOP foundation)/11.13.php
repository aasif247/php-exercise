<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::sayHi();
        echo "Fibonacci of {$n} is:\n";
    }
     
    static function sayHi(){
       echo "Hello bro \n";
    }

    function factorial($n){
        self::sayHi();
        self::$name ="Asif";
        // $this->$name="Hello";
        $this->sayHi();
        $this->number = 10;
        echo "Factorial of {$n} is:\n";
    }
}
$mc = new MathCalculator();
$mc->factorial(5);

MathCalculator::fibonacci(20);
echo MathCalculator::$name;
