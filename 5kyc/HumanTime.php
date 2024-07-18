<?=

function human_readable($seconds) {
    $endSEC="";
    $endMIN="";
    $endHOU="";
    
      $sec=$seconds%60;
      $min=intdiv($seconds, 60);
      $minutes=($min%60); 
      $min=intdiv($seconds,60);
      $hour=intdiv($min, 60);
      if(strlen($sec)==1){
        $sec="0" . $sec;
      }
      if(strlen($minutes)==1){
        $minutes="0" . $minutes;
      }
      if(strlen($hour)==1){
        $hour="0" . $hour;
      }
      
     if($sec<"01"){
       $sec="00";
     } 
     if($minutes<1){
        $minutes="00";
      }
      if($hour<1){
        $hour="00";
      }
    
      
      
      
      return($hour . ":" . $minutes . ":" . $sec);
      
      }
?>