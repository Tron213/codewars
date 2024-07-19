
<?php
function ips_between($start, $end) {
    $arrayStart = explode(".", $start);
    $arrayEnd = explode(".", $end);
    $startInt = ($arrayStart[0] * 256**3) + ($arrayStart[1] * 256**2) + ($arrayStart[2] * 256) + $arrayStart[3];
    $endInt = ($arrayEnd[0] * 256**3) + ($arrayEnd[1] * 256**2) + ($arrayEnd[2] * 256) + $arrayEnd[3];


    $count = $endInt - $startInt;

    return $count;
}
