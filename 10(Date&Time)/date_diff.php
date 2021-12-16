<?php
$d1 = new DateTime('28 August 1995');
$d2 = new DateTime('16 December 2021');

$difference = date_diff($d1, $d2);
echo $difference->format('%y year %m month %d days');
