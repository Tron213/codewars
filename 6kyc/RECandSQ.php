<?php
function sqInRect($lng, $wdth) {

    if($lng == $wdth) {
      return null;
    }
  
    $end = [];
    
  
    while($lng > 0 && $wdth > 0) {
      
      if($lng > $wdth) {
        $end[] = $wdth;
        $lng -= $wdth;
      } else { 
        $end[] = $lng;
        $wdth -= $lng;
      }
    }
  
    return $end;
  }
  