function duplicateCount($text) {
  $q=0; 
  $text=strtolower($text);
  $x=str_split($text);
  $z=array_count_values($x);
  foreach($z as $key => $value){
  
  if ($value>1){
    ++$q;
    }
  }
  
  return $q;
  
}