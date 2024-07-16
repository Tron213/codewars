function count_smileys($arr): int {
    $smileface = 0;
    foreach($arr as $value) {
        if (strlen($value) === 2) {
            if ((substr($value, 0, 1) == ':' || substr($value, 0, 1) == ';') && 
                (substr($value, 1, 1) == ')' || substr($value, 1, 1) == 'D')) {
                $smileface += 1;
            }
        } elseif (strlen($value) === 3) {
            if ((substr($value, 0, 1) == ':' || substr($value, 0, 1) == ';') && 
                (substr($value, 1, 1) == '-' || substr($value, 1, 1) == '~') &&
                (substr($value, 2, 1) == ')' || substr($value, 2, 1) == 'D')) {
                $smileface += 1;
            }
        }
    }
    return $smileface;
}