function countBits($n) 
{
  $g=0;
   $str=decbin($n);
   for ($i=0, $lennstr=strlen($str);$i<$lennstr;$i++){
      $z=substr($str, $i, 1);
      if($z=="1"){
        $g++;       
        
      }
     }
  
  return $g;
  }