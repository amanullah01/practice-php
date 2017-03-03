<?php
  class MyClass{
    public static function myState(){
      echo "This is static function<br>";
    }
  }
  echo "<h2>Example #1 Static method example</h2>";

  MyClass::myState();

  echo "<h2>Example #2 Static property example</h2>";

  class Foo{
    public static $name = 'Aman';
    public static function name(){
      echo "My name is : ".self::$name;
    }
  }

  class Bar extends Foo
  {
      public function fooStatic() {
          return parent::$name;
      }
  }


  Foo::name();
  echo "<br>";
  echo Bar::fooStatic();
?>
