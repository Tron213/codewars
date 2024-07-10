function moveZeros(array $items): array{
$newarr=[];
$zero=0;
foreach($items as $ass)
  if($ass===0 || $ass===0.0){
    $zero+=1;
  }
  else{
    $newarr[]=$ass;
  }
for($i=0;$i<$zero;$i++){
$newarr[]=0;
  
}
return $newarr;

}