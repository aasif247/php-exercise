<?php

time(); // unix epoch to present time in second 
// $minute = time()/60;
// $hour = time()/3600;
// $day = time()/86400;
// $month = time()/2592000;
// $year = time()/31104000;


// echo "Minute = $minute\n
// Hour = $hour\n
// Day = $day\n
// Month = $month\n
// Year = $year";

// date format

// echo date('d/m/y');
// echo "\n";
// echo date('D/F/Y');
// echo "\n";

// Micro time 

// echo microtime(true);
//echo microtime(false);

// if we want to see many number after floationg point then

// $mt = microtime(true);
// printf("%10.23f",$mt);

// find total execution time for a factorial program 

$startTime = microtime(true);
factorial(100);
// sleep(5); sleep the code for 5 sec then execute
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

// $n = fgets(STDIN);
function factorial($n){
    $result =1;
    for ($i=1; $i<=$n; $i++){
        $result *= $i;
    }
    return $result;
}