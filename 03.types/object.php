<?php
  class Foo{
    function __construct(){
      echo 'what the ********* going on here.';
      echo "\n";
    }
    function do_foo(){
      echo "\nThis is do foo function under foo class\n";
    }
  }

  $bar = new Foo;
  $bar->do_foo();
?>
