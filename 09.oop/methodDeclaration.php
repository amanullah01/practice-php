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
?>
