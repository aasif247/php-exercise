<?php
class shape{}

class Shapes{
    private $shapes;
    function __construct(){
        $this->shapes = array();
    }
    
    // here Shape is method signature so no others type data can't pass here , only Shape type data can pass here
    function addShapes(Shape $shape){ 
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Student{
    
}

$shapesCollection = new Shapes();
$shapesCollection-> addShapes(new Rectangle());
$shapesCollection-> addShapes(new Triangle());
// $shapesCollection-> addShapes(new Student());

echo $shapesCollection->totalShapes();