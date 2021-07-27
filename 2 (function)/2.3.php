<?php

function serve($foodType="juice",$numberOfItem="1 cup"){
  echo "{$numberOfItem} of {$foodType} have/has been served";
}

$ft="Biriyani";
$ni="2 plates"; 

serve($ft,$ni);
