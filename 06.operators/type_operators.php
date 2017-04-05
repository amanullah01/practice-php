<?php
  class MyClass{

  }
  class AnotherClass{

  }
  class OtherClass{

  }

  $a = new MyClass;
  $b = new AnotherClass;
  var_dump($a instanceof MyClass);
  var_dump($b instanceof AnotherClass);
  var_dump($a instanceof OtherClass);

  class MyClass1{

  }
  class AnotherClass1 extends MyClass1{

  }

  $d = new MyClass1;
  $e = new AnotherClass1;
  var_dump($d instanceof MyClass1);
  var_dump($e instanceof MyClass1);
?>
