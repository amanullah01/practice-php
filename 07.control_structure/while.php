<?php
$time_start = microtime(true);
  echo "<h1>While Loop</h1>";

  $i = 1;
  while($i <= 10){
    echo $i++;
    echo "<br>";
  }

  echo "**********************<br>";
  echo "Print Even Numbers 1 to 100 <br>";
  $j = 1;
  $sum = 0;
  $count =1 ;
  while($j <= 100):
    if($j % 2 == 0):
      echo $j."<br>";
      $sum +=$j;
      $count++;
    endif;
    $j++;
  endwhile;
  echo "Total Even Numbers:". ($count-1)."<br>";
  echo "Total Sum: $sum <br>";


  echo 'Total execution time in seconds: ' . (microtime(true) - $time_start)/60;
?>
