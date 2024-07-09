function tower_builder(int $n): array {
$z=$n*2-1;
$y=1;
$s="";
$arr=[];
for($i=0;$i<$n;$i++){
$w=($z-$y)/2;
$str=str_repeat(" ",$w) . str_repeat("*",$y) . str_repeat(" ",$w);
$arr[]=$str;
$y+=2;

}
return($arr);
  
}