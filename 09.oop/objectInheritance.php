<?php
  class MyFoo{
    public function name($name){
      echo __CLASS__.": Hello ".$name.PHP_EOL;
    }

    public function test(){
      echo "PHP is great.".PHP_EOL;
    }
  }

  class MyBar extends MyFoo{
    public function name($name){
      echo __CLASS__.": Hello ".$name.PHP_EOL;
    }
  }

  $foo = new MyFoo();
  $bar = new MyBar();
  echo "<pre>";
  echo "<h2>Object Inheritance</h2>";
  $foo->name('Aman');

  $bar->name('Amanullah');
  $foo->test();
  $bar->test();
?>
