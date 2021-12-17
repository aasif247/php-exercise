<?php

class Calc{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c; 
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c; 
    }

    function mul(){
        $this->c = $this->a * $this->b;
        return $this->c; 
    }

    function div(){
        $this->c = $this->a / $this->b;
        return $this->c; 
    }
}

$value = new Calc;
$value-> a=10;
$value-> b=5;

echo $value->sum();
echo "\n";
echo $value->sub();
echo "\n";
echo $value->mul();
echo "\n";
echo $value->div();
echo "\n";


