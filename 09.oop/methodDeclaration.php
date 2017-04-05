<?php
  class MyClass{
    public function __construct(){
      echo "This is Constructor<br>";
    }
    public function MyPublicMethod(){
      echo "This is ".__FUNCTION__."<br>";
    }

    protected function MyProtectedMethod(){
      echo "This is ".__FUNCTION__."<br>";
    }

    private function MyPrivateMethod(){
      echo "This is ".__FUNCTION__."<br>";
    }

    function foo(){
      $this->MyPublicMethod();
      $this->MyProtectedMethod();
      $this->MyPrivateMethod();
    }
  }
  echo "<h2Method Visibility.</h2>";
  echo "<pre>";
  $obj = new MyClass();
  var_dump($obj);
  $obj->MyPublicMethod(); //it works fine.
  //$obj->MyPrivateMethod(); // It produce fatal error
  //$obj->MyPrivateMethod(); //It produce fatal error.
  echo "***************<br>";
  $obj->foo(); //It works fne.

  class MyClass2 extends MyClass{
    function foo2(){
      $this->MyPublicMethod();
      $this->MyProtectedMethod();
      $this->MyPrivateMethod(); // it will not work.
    }
  }

  echo "<br>********** MyClass2 Start Here***********<br>";
  $obj2 = new MyClass2();
  $obj2->MyPublicMethod();
  //$obj2->MyProtectedMethod(); // it will not work here.. because this is protected.
  //$obj2->MyPrivatedMethod(); // it will not work here.. because this is private.
  echo "********foo start here*********<br>";
  $obj2->foo();

  echo "********foo2 start here*********<br>";
  $obj2->foo2(); // public and protected works fine but private property not accessable.
?>
