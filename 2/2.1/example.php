<?php

  function isOdd($n)
  {
   if($n%2 == 1){
       return true;
   }return false;

  } 

  $y=6;

  if(isOdd($y)){
      echo "{$y} is an odd number";
  }else{
      echo "{$y} is an even number";
  }