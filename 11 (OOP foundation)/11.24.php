<?php
class MotorCycle{

    private $parameters;
    function __construct($displacement, $capacity, $mileage){
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
        }

    // function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement){
    //     $this->parameters['displacement'] = $displacement;
    // }

    function __isset($name){
        if(isset($this->parameters[$name])){
            echo "{$name} not found";
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name){
        echo $this->parameters[$name]; // $this->displacement
    }
    
    function __set($name,$value){
        echo $this->parameters[$name] = $value;
    }
}

$Kawasaki = new MotorCycle('160cc','20ltr','20kmph');

if(isset($Kawasaki->tiresize)){
    echo "Found";
}else{
    echo " Not found";
}

unset($Kawasaki->mileage);