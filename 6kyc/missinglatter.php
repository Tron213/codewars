<?php

function find_missing_letter(array $array): string {
  $reg=ctype_upper($array[0]);
  if($reg==true){
    $alphas = range('A', 'Z');    
  }
  else{
    $alphas = range('a', 'z');    
  }
$index=array_search($array[0], $alphas);
foreach($array as $key => $value){
  if($value != $alphas[$index]){
    return $alphas[$index];
  }
  else{
    $index+=1;
  }
  
  
  
  
  
}










}