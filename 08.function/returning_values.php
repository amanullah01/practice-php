<?php
  echo "<h2>Example #1 Use of return</h2>";
  $s1 = microtime(true);
  function square($val){
    return $val * $val;
  }
  echo square(2);
  echo "<br>";
  $e1 = microtime(true);
  echo "Time". ($e1 - $s1);
?>
