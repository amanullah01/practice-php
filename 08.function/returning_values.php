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

  echo "<h2>Example #2 Returning an array to get multiple values</h2>";
  function return_multiple(){
    return array(0,1,2,3);
  }
  var_dump(return_multiple());
  list($z,$o,$t,$th) = return_multiple();
  echo $z;
?>
