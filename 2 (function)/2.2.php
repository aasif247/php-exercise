<?php

function factorial(int $n){

   $result =1 ;
   for($i=$n;$i>1;$i--){
       $result = $result*$i;
   }
   return $result;
}

$x = 7;

echo "Factorial of {$x} is ".factorial($x);