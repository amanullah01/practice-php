<?php
  echo "<h2>PHP Include</h2>";
  echo "A $color $fruit <br>";
  include 'inc1.php';
  echo "$color $fruit";
  echo "<br>";
  function foo()
  {
      global $color;

      include 'inc1.php';

      echo "$color $fruit<br>";
  }
  foo();
  echo $color;
  echo "<br>";
  echo $fruit;
?>
