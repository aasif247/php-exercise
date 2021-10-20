<?php

function fibonacci($old,$new,$end){

    static $start;
    $start = $start ?? 1; 

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_tmp = $old+$new;
    $old = $new;
    $new = $_tmp;

    fibonacci($old,$new,$end);
}
fibonacci(0,1,5);