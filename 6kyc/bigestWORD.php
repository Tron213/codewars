<?php
function high($x) {
  $alphas = range('a', 'z');
  $array=explode(" " ,$x);
  $MaxWord='';
  $MaxRate=0;
  
  foreach($array as $key => $values){
    $lenofWORD=strlen($values);
    $count=0;
    for($i=0;$i<$lenofWORD;$i++){      
      $count= $count+(array_search(substr($values,$i,1), $alphas)+1);
    }
    if($count>$MaxRate){
      $MaxWord=$values;
      $MaxRate=$count;
    }    
    
    
    
  }
  return $MaxWord;
}