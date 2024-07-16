<?php
function bouncingBall($h, $bounce, $window) {
$m=-1;
if(($h>0) && ($bounce>0 && $bounce<1) && ($window<$h)){
  while($h>$window){
    $m+=2;
    $h=$h*$bounce;
  }
return $m;
}
  else{
    return -1;
  }
  
}
