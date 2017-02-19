<?php
  echo "<h3>goto</h3>";

  for($i = 0, $j = 10; $i < 20; $i++){
    while($j--){
      if($j == 5){
        goto end;
      }else{
        echo "i = $j<br>";
      }
    }
  }
  end:
  echo 'j hit 5';
?>
