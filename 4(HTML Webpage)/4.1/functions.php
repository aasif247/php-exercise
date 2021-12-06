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

function displayOptions($options, $selectedValue){
    foreach($options as $option){
        $option = strtolower($option); //Banana banana
        $selected = '';
        if(in_array($option,$selectedValue)){
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>\n",strtolower($option),$selected,ucwords($option));
    }
}

// actual code of this function

// "<option value='%s'>%s</option>"
// option value='mango'>Mango</option>