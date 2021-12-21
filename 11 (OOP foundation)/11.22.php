<?php
class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 = $e;
$m = new Planet("Mars");
$m1 = new Planet("Mars");

if($e === $e2){
    echo "Similar Planets\n";
}
else{
    echo "Not similar\n";
}