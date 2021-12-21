<?php
class DistrictCollection implements IteratorAggregate,Countable{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }
    
    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts); 
    }
}

$districts = new DistrictCollection();
$districts->add('Dhaka');
$districts->add('Chittagong');
$districts->add('Khulna');
$districts->add('Barisal');
$districts->add('Rajshahi');
$districts->add('Sylhet');
$districts->add('Rangpur');

foreach($districts as $district){
    echo $district."\n";
}

echo count($districts) ;
