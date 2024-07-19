<?php
function longestConsec($strarr, $k) {
    $n = count($strarr);
    if ($n == 0 || $k > $n || $k <= 0) {
        return "";
    }
    
    $longest = "";
    
    for ($i = 0; $i <= $n - $k; $i++) {
        $currentStr = implode("", array_slice($strarr, $i, $k));
        if (strlen($currentStr) > strlen($longest)) {
            $longest = $currentStr;
        }
    }
    
    return $longest;
}
?>