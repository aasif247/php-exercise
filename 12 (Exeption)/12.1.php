<?php
class Student {
    function __construct($name,$age){
        $this->name = $name;
        if($age<4){
            throw new Exception("Too Young",1001);
        }elseif($age>35) {
            throw new Exception("Too Old",1002);
        }
        echo $this->age = $age;
    }
}

try{
    $s =new Student('Rahim',36);
}catch(Exception $e){
    echo $e->getCode().":".$e->getMessage();
}