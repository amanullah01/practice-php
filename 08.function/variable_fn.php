<?php
  echo "<h2>Example #1 Variable function example</h2>";

  function foo(){
    echo "Hello this is function foo()<br>";
  }

  function bar($arg){
    echo "This is function bar()<br> My name is $arg<br>";
  }

  $fn1 = 'foo';
  $fn1();
  $fn2 = 'bar';
  $fn2('Aman');
?>
