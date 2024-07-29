<?php
function perimeter($n) {
    $fib=[1,1];
    $i=1;
  while ($i<$n){
    $fib[]=$fib[$i]+$fib[$i-1];
    $i+=1;
    
  }
  return array_sum($fib)*4;
}