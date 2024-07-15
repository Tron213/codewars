<?php
function digital_root($number): int
{
 while($number>=10){
   $x=str_split($number);
   $number=array_sum($x); 
   echo $number;
   
   
 }
 
return $number;
}
?>