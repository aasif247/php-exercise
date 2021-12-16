<?php
date_default_timezone_set('Asia/kolkata');
date_default_timezone_set('Asia/Dhaka');
echo date('d/m/y');
echo date('d/m/Y');
echo date('d/M/Y');
echo date('dS M, Y');
echo date('dS F, Y');
echo date('dS F, Y h:i:s');
echo date('dS F, Y H:i:s a'); //am/pm
echo date('dS F, Y H:i:s A'); //AM/PM
echo date('dS F, Y H:i:s A',time()+24*3600); //PM
echo date('z');// cuurent day of the year
echo date('t'); // monthly total day
echo date('l'); //this is for weekly days 
