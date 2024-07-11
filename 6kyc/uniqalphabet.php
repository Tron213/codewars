function detect_pangram($string) { 
  $filtr=preg_replace('/[^a-zA-Z]/', '', $string);
  $undo=strtolower($filtr);
  $undo=str_split($undo);
  $res=array_unique($undo);
  $res=count($res);
  return ($res==26)?true : false;
}