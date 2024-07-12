
<?
function expanded_form(int $n): string {
    $ints = strval($n); 
    $strlens = strlen($ints); 
    $fina = []; 

    for ($i = 0; $i < $strlens; $i++) { 
        if ($ints[$i] != '0') { 
            $fina[] = $ints[$i] . str_repeat("0", $strlens - $i - 1); 
        }
    }

    return implode(" + ", $fina); 
}?>