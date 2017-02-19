<?php
  echo "For Loop Example#1<br>";
  for($i = 0; $i <= 5; $i++){
    echo "$i ";
  }

  echo "<br>For Loop Example#2<br>";
  for($j = 0; ; $j++){
    if($j >5){
      break;
    }
    echo "$j ";
  }

  echo "<br>For Loop Example#3<br>";
  $k = 0;
  for(; ;){
    if($k >5){
      break;
    }
    echo "$k ";
    $k++;
  }

  echo "<br>For Loop Example#4<br>";
  for ($l = 1, $m = 0; $l <= 5; $m += $l, print $l," ", $l++);
?>
