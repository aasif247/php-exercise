<?php
// function __autoload($name){
//     include "{$name}.php";
// }


// function autoload($name){
//     include "{$name}.php";
// }

//advance (class from different folder)
function autoload($name){
    if(strpos($name,"Planet_")!==false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}

spl_autoload_register('autoload');

(new Bike)->getType();
(new Spaceship)->launch();
(new Planet)->getName();
(new Planet_Mars)->getName();