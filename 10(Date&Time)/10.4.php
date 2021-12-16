<?php
echo mktime(0, 0, 0,12,16,1971)."\n";
echo strtotime("16 December, 1971");
echo PHP_EOL;
echo time();
echo PHP_EOL;
echo strtotime("now");
echo PHP_EOL;
echo strtotime("+3days");
echo PHP_EOL;
echo (strtotime("3 weeks 1 day 24 hours")-strtotime("now"))/(24*60*60);
echo PHP_EOL;
echo strtotime('28 August 1995 5:15:10');
echo "\n";
echo date('H:i:s A',strtotime('28 August 1995 5:15:10'));
echo "\n";


// date_diff function
$date1=date_create("2021-12-16");
$date2=date_create("2022-2-20");
$diff=date_diff($date1,$date2);

echo $diff->format("%y year %m months %d days");