<?php 

$students = [ "Asif", "Arif", 123,"Musaib"];



$students[1] = "ishmam"; // change a array element , array is mutable




array_unshift($students, "Asif");
array_push($students, "Anik");

array_shift($students);

$std = array_pop($students);
echo $std."\n";

//forward
$n = count($students);
for ($i=0; $i<$n; $i++)
  echo $students[$i]."\n";


/* array_shift(); -> remove 1 element from first
array_pop(); -> remove 1 element from last

array_unshift(); -> insert new element at first 
array_push(); -> insert new element at last
*/
