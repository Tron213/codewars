<?php
function bowlingPins(array $arr) {

$kegs = [7, 8, 9, 10, 4, 5, 6, 2, 3, 1];


foreach ($kegs as $key => $item) {
    if (in_array($item, $arr)) {
        $kegs[$key] = " ";
    } else {
        $kegs[$key] = "I";
    }
}

// Форматируем вывод
$str = $kegs[0] . " " . $kegs[1] . " " . $kegs[2] . " " . $kegs[3] . "\n"
     . " " . $kegs[4] . " " . $kegs[5] . " " . $kegs[6] . " \n"
     . "  " . $kegs[7] . " " . $kegs[8] . "  \n"
     . "   " . $kegs[9] . "   ";

return $str;
}
?>