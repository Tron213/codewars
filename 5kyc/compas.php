<?php
function dirReduc($arr) {
    $opposite = array(
        "NORTH" => "SOUTH",
        "SOUTH" => "NORTH",
        "EAST" => "WEST",
        "WEST" => "EAST"
    );

    $stack = array();

    foreach ($arr as $direction) {
        if (!empty($stack) && end($stack) == $opposite[$direction]) {
            array_pop($stack);
        } else {
            $stack[] = $direction;
        }
    }

    return $stack;
}

?>