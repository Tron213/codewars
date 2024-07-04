function sortArray(array $arr) : array {
  $odd=[];
  for($i=0, $lenarr=count($arr); $i<$lenarr; $i++){
    if($arr[$i]%2!=0){
      $odd[]=$arr[$i];     
    } 
  }
  sort($odd);
  for($i=0, $lenarr=count($arr), $x=0; $i<$lenarr; $i++){
    if($arr[$i]%2!=0){
      $arr[$i]=$odd[$x];
      $x+=1;    
    }
  }
return $arr;
  
}