<?php
$filename = "E:\\Xampp\htdocs\php-exercise\\7(file)\\data\\file4.txt";

file_put_contents($filename, "Hello \n",LOCK_EX | FILE_APPEND);
file_put_contents($filename, "I am from jupiter\n",LOCK_EX | FILE_APPEND);





