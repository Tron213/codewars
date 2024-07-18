<?php
function find_routes(array $routes) {
    $road = [];
    $follow = [];
    $lastPoint = "";
    
    foreach ($routes as $route) {
        foreach ($route as $point) {
            $road[] = $point;
        }
    }
    

    $uni = array_count_values($road);
    $startPoint = [];
    
   
    foreach ($uni as $key => $value) {
        if ($value == 1) {
            $startPoint[] = $key;
        }
    }
    
    $startPointIndex = [];
    foreach ($startPoint as $values) {
        foreach ($routes as $outerKey => $arrayValue) {
            foreach ($arrayValue as $innerIndex => $value) {
                if ($value == $values && $innerIndex == 0) {
                    $startPointIndex = [$outerKey, $innerIndex];
                }
            }
        }
    }
    

    $follow[] = $routes[$startPointIndex[0]][0];
    $lastPoint = $routes[$startPointIndex[0]][1];
    $follow[] = $lastPoint;

    for ($i = 2; $i < count($routes) + 1; $i++) {
        foreach ($routes as $route) {
            if ($route[0] == $lastPoint) {
                $lastPoint = $route[1];
                $follow[] = $lastPoint;
                break;
            }
        }
    }


    $spyROAD = implode(", ", $follow);
    return $spyROAD;
}


