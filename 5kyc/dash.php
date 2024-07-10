function dashatize(int $num): string {
   
   $str = (string) $num;
   $newstr = '';
   
 
   for ($i = 0; $i < strlen($str); $i++) {
       $char = $str[$i];
      
       if (intval($char) % 2 !== 0) {
       
           if ($i > 0 && $newstr[strlen($newstr) - 1] !== '-') {
               $newstr .= '-';
           }
         
           $newstr .= $char;
        
           if ($i < strlen($str) - 1) {
               $newstr .= '-';
           }
       } else {
       
           $newstr .= $char;
       }
   }

   return trim($newstr, '-');
}