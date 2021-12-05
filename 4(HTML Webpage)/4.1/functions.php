<?php

function isChecked($inputName, $value){
   if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName])){
       echo " checked";
   }
}

//if the array is only for foods insted of anything mixed
function isFruitsChecked($value){
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST['fruits'])){
        echo " checked";
    }
}