<?php
  class Test{
    private $foo;
    public function __construct($foo){
      $this->foo = $foo;
      echo $this->foo;
    }

    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function buzz(Test $other){
      $other->foo = 'Hello';
      var_dump($other->foo);
      $other->bar();
    }

  }

  echo "<h2>Example #4 Accessing private members of the same object type</h2>";
  $obj = new Test('test');
  echo "<pre>";
  $obj->buzz(new Test('other'));
?>
