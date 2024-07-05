function duplicate_encode($word){
	    $newstr = ''; 
    $word = strtolower($word); 
    $words = str_split($word); 
    $counts = array_count_values($words); 

    
    foreach ($words as $char) {
       
        if ($counts[$char] > 1) {
            $newstr .= ')';
        } else { 
            $newstr .= '(';
        }
    }

    return $newstr; 
}
  