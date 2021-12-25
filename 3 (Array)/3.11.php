<?php

$Students = array('Asif','Arif','kamal','Rahim','karim');

$addStudents =array('zarif','shelim');
$newStudents = array_splice($Students,1,-1,$addStudents);

print_r($newStudents);
print_r($Students);