<?php
  class Foo{
    public static $static_value = 'This is static property value';

    public function myFoo(){
      return self::$static_value;
    }
  }

  class Bar extends Foo{
    public function myBar(){
      return parent::$static_value;
    }
  }

  $foo = new Foo ;
  echo $foo->static_value; //undefined
  echo "<br>";
  echo $foo->myFoo(); //undefined
  echo "<br>";
  echo Foo::$static_value;
  echo "<br>";
  //echo Foo::myFoo();

  echo "<br>";
  $bar = new Bar;
  echo Bar::myBar();
  echo "<br>";
  echo $bar->myBar();

?>
