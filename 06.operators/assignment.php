<?php
  $a = $b = 4;
  echo "a = $a";
  echo "<br>";
  echo "b = $b";

  echo "<br>***********************<br>";

  $i = ($j = 4) +5;

  echo "i = $i";
  echo "<br>";
  echo "j = $j";

  echo "<br>Example #1 Assigning by reference<br>";

  $ass = 10;
  $bass = $ass;
  echo $ass."<br>";
  echo $bass."<br>";

  $ass =20;
  echo $ass."<br>";
  echo $bass."<br>";
  echo "*******************<br>";
  $d = 30;
  $e = &$d;

  echo $d."<br>";
  echo $e."<br>";
  echo "*******************<br>";
  $d = 50;
  echo $d."<br>";
  echo $e."<br>";

?>
