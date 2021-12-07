<?php

$name = "Rakib";

$string = "my name is $name \n \t New data\n "; // if we use ' ' here then it doesn't recognise $name as a variable 

echo $string;

// EOD -> here doc

$heredoc = <<<EOD
asif
gadget shed {$name} \n
new arrival \n
EOD;

echo $heredoc;

// 'EOD' -> Nowdoc  when we use nowdoc it doesn't recognise any variable

$nowdoc = <<<'EOD'
asif
gadget shed {$name} \n
new arrival
EOD;

echo $nowdoc;