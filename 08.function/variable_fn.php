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

  echo "***************************<br>";
  echo "<h2>Example #2 Variable method example</h2>";

  class Foo{
    function variable(){
      echo "This is variable function. <br>";
      $name = 'bar';
      $this->$name();
    }
    function bar(){
      echo "This is bar <br>";
    }
  }

  $f = new Foo ;
  $f_v = 'variable';
  $f->$f_v();

  echo "<h2>Example #3 Variable method example with static properties</h2>";
  class FooState
  {
      static $variable = 'static property<br>';
      static function Variable()
      {
          echo 'Method Variable called<br>';
      }
  }
  echo FooState::$variable;
  $variable = "Variable";
  FooState::$variable();
?>
