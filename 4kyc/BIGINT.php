<?php
function sum_strings($a, $b) {
    # УРАВНИВАЕМ ЧИСЛА
    $lenA = strlen($a);
    $lenB = strlen($b);
    $abs = abs($lenA - $lenB);
    
    if ($lenA < $lenB) {
        $a = str_repeat("0", $abs) . $a;
    } elseif ($lenA > $lenB) {
        $b = str_repeat("0", $abs) . $b;
    }
    
    $lenstr = strlen($a); 
    $endNUM = ""; 
    $Glut = 0; 

    for ($i = $lenstr - 1; $i >= 0; $i--) {
        $sum = 0;
        $ai = substr($a, $i, 1);
        $bi = substr($b, $i, 1);
        $sum = (int)$ai + (int)$bi + (int)$Glut;
        
        if ($sum > 9) {
            $Glut = intdiv($sum, 10);
            $endNUM = ($sum % 10) . $endNUM;
        } else {
            $Glut = 0;
            $endNUM = $sum . $endNUM;
        }
    }
    
    if ($Glut > 0) {
        $endNUM = $Glut . $endNUM;
    }


    return ltrim($endNUM,"0"); 
}

