<?php

//----1st way-----
$name = "Earth ";

function doSomething1(){
    // global $name;
    // echo $name;
    echo $GLOBALS['name'];
}

doSomething1();

//----2nd way----

function doSomething2(){
    global $name;
    $name = "Earth"; //local scope
}

doSomething2();
echo $name;

//---3rd way---

function doSomething(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

function doExtra(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doExtra();