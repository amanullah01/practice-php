<?php
  class ScopeResoulation{
    const CONST_VALUE = "Hello Scope";
  }
  echo "<pre>";
  echo "<h2>Example #1 :: from outside the class definition</h2>";
  $obj = new ScopeResoulation ;
  var_dump($obj);
  echo ScopeResoulation::CONST_VALUE;

  echo "<h2>Example #2 :: from inside the class definition</h2>";

  class OtherClass extends ScopeResoulation{
    public static $my_static = "Static var";

    public static function foo(){
      echo parent::CONST_VALUE;
      echo "<br>";
      echo self::$my_static;
      echo "<br>";
      echo self::CONST_VALUE;
    }
  }

  $obj2 = new OtherClass ;
  $obj2->foo();
  echo "<br>****************************</br>";
  OtherClass::foo();
?>
