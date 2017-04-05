<?php
  /*This code will work on php 7.1 and later*/
  Class MyConst{
    public const MY_PUBLIC = 'public';
    protected const MY_PROTECTED = "PROTECTED";
    private const MY_PRIVATE = "PRIVATE";

    function foo(){
      echo self::MY_PUBLIC."br>";
      echo self::MY_PROTECTED."<br>";
      echo self::MY_PRIVATE."<br>";
    }
  }
  echo "<h2>CONSTANT visibility declaration</h2>";
  $obj = new MyConst();
  MyConst::MY_PUBLIC;
?>
