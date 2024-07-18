<?php
function rowSumOddNumbers($n) {
  if($n==1){
    return 1;
  }
  
$firstpoint=$n*($n-1)+1;
$summa=0;
for($i=0;$i<$n;$i++){
$summa+=$firstpoint;
$firstpoint+=2;
  
  
  
  
}
  return $summa;

}