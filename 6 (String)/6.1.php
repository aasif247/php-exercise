<?php

$name = "Rakib";

$string = "my name is $name \n \t New data\n "; // if we use ' ' here then it doesn't recognise $name as a variable 

echo $string;

// EOD -> here doc
// 'EOD' -> Nowdoc  when we use nowdoc it doesn't recognise any variable

$heredoc = <<<EOD
asif
gadget shed {$name} \n
new arrival
EOD;

echo $heredoc;