<?php

$gadgets = array('a'=>'earphone','d'=>'headset','c'=>'powerbank','b'=>'cable','adapter','speaker',);

$numbers = array(1,1,22,55,1,'33',75,5,2,3,1);

if(in_array(33,$numbers,true)){
    echo "found";
}else{
    echo "Not found";
};

$position = array_search(1,$numbers,true);
echo $position;

if (key_exists('e',$gadgets)){
    echo "found";
}else{
    echo "Not found";
}