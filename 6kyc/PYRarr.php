<?php

function pyramid($n) {
  $pyr = [];
  for ($i = 0; $i < $n; $i++) {
    $newarr = []; 
    for ($z = 0; $z <= $i; $z++) {
      $newarr[] = 1;
    }
    $pyr[] = $newarr;
  }
  return $pyr;
}?>