<?php
  class ScopeResoulation{
    const CONST_VALUE = "Hello Scope";

    protected function myFunc(){
      echo "Hello ... This is protected myFunc method in ".__CLASS__."<br>";
    }
  }
  echo "<pre>";
  echo "<h2>Example #1 :: from outside the class definition</h2>";
  $obj = new ScopeResoulation ;
  var_dump($obj);
  //echo $obj->CONST_VALUE; // It will not work here.
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

  echo "<h2>Example #3 Calling a parent's method</h2>";

  class NewMyClass extends ScopeResoulation{
    function myFunc(){
      parent::myFunc();
      echo "This is public my func in ".__CLASS__." Class";
    }
  }

  $obj3 = new NewMyClass ;
  $obj3->myFunc();
?>
