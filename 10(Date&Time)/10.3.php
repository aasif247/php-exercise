<?php
echo time(); // unix epoch to present time in second
echo PHP_EOL;
echo mktime(0,0,0,12,1,2021)."\n"; //unix epoch to date
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2021)."\n";
echo gmmktime(0,0,0,12,1,2021)."\n";//gmt time
// echo (316800-313200)/3600; // difference between two time

echo (mktime(0,0,0,12,10,2021) - mktime(0,0,0,8,28,1995))/(24*60*60); // difference between two time