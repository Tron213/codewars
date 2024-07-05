function isIsogram($string) {
 
  $string=strtolower($string);
  $x=str_split($string);
  $z=array_count_values($x);
    foreach($z as $key => $values){      
      if($values>1){
        return false;
      }

    
      
    }
  return true;
}