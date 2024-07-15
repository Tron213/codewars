
<?php
function findIt(array $seq) : int
{
    $per=array_count_values($seq);
    foreach($per as $fu => $css){
      if($css%2!=0){
        return $fu;
      }
    }
}

?>