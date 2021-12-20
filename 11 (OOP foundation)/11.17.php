<?php
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='',$age='',$class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property){
        return $this->$property;
    }
    
    public function __set($property, $value){
        $this->$property = strtolower($value);
    }
}

$getSet = new Student('Asif','20','10');
// echo $getSet->name;

$getSet->name = 'Abir';
echo $getSet->name;


//     function getName(){
//         return $this->name;
//     }
//     function setName($name){
//         $this->name = $name;
//     }

//     function getAge(){
//         return $this->age;
//     }
//     function setAge($age){
//         $this->age = $age;
//     }

//     function getClass(){
//         return $this->class;
//     }
//     function setClass($class){
//         $this->class = $class;
//     }
// }

// $getset = new Student('Rahim','25','12th');
// echo $getset->getName();
// echo "\n";
// echo $getset->getAge();
// echo "\n";
// echo $getset->getClass();

// $getset->setName('Asif');
// echo $getset->getName();
// echo "\n";

// $getset->setAge('25');
// echo $getset->getAge();
// echo "\n";


// $getset->setClass('Alif');
// echo $getset->getCLass();