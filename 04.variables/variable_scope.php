<?php
  $a = 10 ;
  $b = 20 ;
  function test(){
    echo $a;
  }
  test();

  echo "Global <br>";
  function sum(){
    global $a, $b;
    echo $b = $a + $b ;
    echo "<br>";
  }
  sum();
  echo $b;

  echo "<br>";
  function Sum2()
  {
      $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
  }

  Sum2();
  echo $b;

  echo "<br>***********************Static Varialbe***********";
  function test2()
  {
      static $count = 0;

      $count++;
      echo $count;
      if ($count < 10) {
          test2();
      }
      $count--;
  }

  function foo2(){
      static $int = 0;          // correct
      static $int = 1+2;        // correct (as of PHP 5.6)
      //static $int = sqrt(121);  // wrong  (as it is a function)

      $int++;
      echo $int;
  }
  foo2();
?>
