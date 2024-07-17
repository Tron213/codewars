function decode_morse(string $code): string {
    $arrmorz=explode(" ", $code);
    $decode='';
    foreach($arrmorz as $key => $values){
      if($values=="" ){   
        if(substr($decode, -1)!=" "){  
        $decode=$decode . " ";}
      }
      else{
        $decode=$decode . MORSE_CODE[$values];
        
      }
      
    }
echo $code;
return trim($decode);
}
