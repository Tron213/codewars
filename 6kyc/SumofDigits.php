function digital_root($number): int
{

  
while(strlen((string)$number)>1){
  $number=array_sum(str_split($number));
   }
return $number;


}
 