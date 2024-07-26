<?php
function uniqueInOrder($iterable){
$newARR=[];
if(gettype($iterable)=="string"){   
$ITER=str_split($iterable);}
  elseif(gettype($iterable)=="array"){
    foreach($iterable as $value){
      $ITER[]=$value;
    }
  }
$newARR[]=$ITER[0];
$key=0;
if ($iterable != true){
  $arrays=[];
  return $arrays;
}
foreach($ITER as $value){
  if($value != $newARR[$key]){
    $newARR[]=$value;
    $key+=1;
  }
  
  
}
return $newARR;
  
}