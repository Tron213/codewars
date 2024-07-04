function solution($str) {
    $arr = [];

    if ($str == "") {
        return $arr;
    } else {
        $length = strlen($str);

        if ($length % 2 == 0) {
            for ($i = 0; $i < $length; $i += 2) {
                $s = substr($str, $i, 2);
                $arr[] = $s;
            }
        } else {
            for ($i = 0; $i < $length; $i += 2) {
                if ($i == $length - 1) {
                    $s = substr($str, $i, 1) . "_";
                    $arr[] = $s;
                } else {
                    $s = substr($str, $i, 2);
                    $arr[] = $s;
                }
            }
        }
    }
    return $arr;
}