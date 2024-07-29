<?php
function solution($number){
$number-=1;
$sum=0;
if($number<1){
  return $sum;
}
while ($number > 0){
  if($number%5==0){
    $sum+=$number;
  }
  elseif($number%3==0){
    $sum+=$number;
    
    
  }
  $number-=1;
}
return $sum;
  
}