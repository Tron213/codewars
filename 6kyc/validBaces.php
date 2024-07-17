<?php

function validBraces($s) {

    $stack = [];
    

    $pairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        

        if (isset($pairs[$char])) {
            
            $topElement = empty($stack) ? '#' : array_pop($stack);
            
        
            if ($topElement != $pairs[$char]) {
                return false;
            }
        } else {
            
            $stack[] = $char;
        }
    }

    return empty($stack);
}


?>
