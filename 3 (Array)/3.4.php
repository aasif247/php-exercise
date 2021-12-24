<?php

//string to array
$gadgets = explode(', ','earphone, headset, charger, cable');

$fruits = preg_split('/(, |,)/','mango, berry, lichi, banana,apple,malta');

//array to string
$gadgets_string = join(', ',$gadgets);

echo count($fruits);