<?php
$name = "Asif talukdar 01796406979 asif@gmail.com";
$parts = sscanf($name,"%s %s %11s %s");
print_r($parts);

sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile,$email);
// echo $fname;
// echo "\n";
// echo $lname;
// echo "\n";
// echo $mobile;
// echo "\n";
echo $email;



$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $red;
echo "\n";
echo $green;
echo "\n";
echo $blue;