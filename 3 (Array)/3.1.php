<?php
// array - collection of data or variable . we can assign multiple data in a variable by array. 

$students = [ "Asif", "Arif", 123,"Musaib"];

// $students = array( "Asif", "Arif", 123, "Musaib");
// var_dump($students);
//  echo count($students);

$n = count($students);

//forward
for ($i=0; $i<$n; $i++)
  echo $students[$i]."\n";

//backward
for($i=$n-1; $i>=0; $i--)  
 echo $students[$i]."\n";
  