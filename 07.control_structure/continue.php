<?php
  echo "PHP Continue Statement<br>";
  for($i = 0 ; $i <= 7 ; $i++){
    if($i == 3){
      echo "Three removed<br>";
      continue;
    }
    echo $i;
    echo "<br>";
  }
?>
