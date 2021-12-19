<?php
class Ourclass {
    final function doSomething() {
        echo "Doing something\n";
    }
}

class MyClass extends Ourclass {
    // final function doSomethings() {
    //     echo "Doing something special\n";
    // }
}

$ch = new MyClass();
$ch -> doSomething();