
<?php
function latestClock(int $a, int $b, int $c, int $d): string {
$arr=[$a,$b,$c,$d];
$FMin=-1;
$Fhour=-1;
$time="";
$Shour=-1;
  #Выбрал Десятки минут
foreach($arr as $key=>$values){
  if($values>-1 && $values < 6 && $FMin<$values){
    $FMin=$values;
    $keys=$key ;  
  }
}
#Пересобрал массив
  $newarr=[];
foreach($arr as $key => $values){
  if($keys != $key){
    $newarr[]=$values;
  }
}
#выбираем первый час
foreach($newarr as $key => $values){
  if($values>-1 && $values < 3 && $values>$Fhour){
    $Fhour=$values;
    $keys=$key;
  }
}
# Пересборка массива  
  $arr=[];
foreach($newarr as $key => $values){
  if($keys != $key){
    $arr[]=$values;    
  }
}
#выбор часа 2
foreach ($arr as $key => $values){
  if($Fhour!=2){
    if($values > -1 && $values < 10 && $values>$Shour){  
        $Shour=$values;
        $keys=$key;}
  }
  else{
    if($values > -1 && $values < 4 && $values>$Shour){ 
      $Shour=$values;
      $keys=$key;}
  }
  
}
  #пересборка массива
$newarr=[];
foreach($arr as $key => $values){
  if($keys != $key)
    $newarr[]=$values;
}
$time=$time . $Fhour . $Shour .":" . $FMin . $newarr[0]; 

return $time;


}