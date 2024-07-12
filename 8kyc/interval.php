function invert(array $a): array {
 $ac=[];
  foreach($a as $arr){  
    $ac[]=-$arr;}
  return $ac;
}