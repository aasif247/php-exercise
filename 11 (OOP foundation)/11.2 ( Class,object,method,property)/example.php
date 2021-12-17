<?php 
class বালতি{
    public $name;
    function sayHi(){
        echo "হ্যালো\n";
    }
   
    function sayName(){
        echo "আমার বালতিতে আছে {$this->name}\n";
    }
}
 
$পানি = new বালতি();
$বালি = new বালতি();
$মাটি = new বালতি();
 
$পানি->name ="বিশুদ্ধ পানি\n"; // set
$বালি->name ="কাদা বালি\n"; // set
$মাটি->name ="শুখনো মাটি\n"; // set
 
 
$পানি-> sayHi();
$পানি-> sayName();
 
 
$বালি-> sayHi();
$বালি-> sayName();
 
$মাটি-> sayName();

// an oop example for absolute beginner lmao!