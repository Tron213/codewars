<?php

function balance(string $l, string $r): string {
  $weightLeft=0;
  $weightright=0;
  $leftlen=strlen($l);
  $rightlen=strlen($r);
  for($i=0;$i<$leftlen;$i++){
    if(substr($l,$i,1)=="!"){
      $weightLeft+=2;
    }
    elseif(substr($l,$i,1)=="?"){
       $weightLeft+=3;
    }}
  for($i=0;$i<$rightlen;$i++){
    if(substr($r,$i,1)=="!"){
      $weightright+=2;
    }
    elseif(substr($r,$i,1)=="?"){
       $weightright+=3;
    }   
    
  }
  if($weightright==$weightLeft){
    return "Balance";
  }
  elseif($weightright<$weightLeft){  
     return "Left";}
  else{    
    
    return "Right";
  }
      
      
    
    
    
  }
  ?>