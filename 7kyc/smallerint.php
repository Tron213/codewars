<?php

function smaller(array $nums): array {
  #сколько справа элементов меньше 
  $lenarr=count($nums)-1;
  $fine=[];
  
  foreach($nums as $key => $values){
    $reit=0;
    for($i=$key+1;$i<=$lenarr;$i++)
      if($nums[$i]<$values){
        $reit+=1;
      }
    $fine[]=$reit;
  }
return $fine;
}




?>