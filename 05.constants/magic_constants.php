<?php
  echo "Current Line number is: [ __LINE__ ] : ".__LINE__."<br>";
  echo "The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
    : [ __FILE__ ] : ".__FILE__."<br>";
  echo "Directory of the file: [ __DIR__ ] : ".__DIR__;
  echo "<br>";
  echo __FUNCTION__;
  echo "<br>";
  echo __CLASS__;
  echo "<br>";
  echo __TRAIT__;
  echo "<br>";
  echo __METHOD__;
  echo "<br>";
  echo __NAMESPACE__	;
  echo "<br>";
  ClassName::class;

  class Aman{
    function name(){
      echo "Function name is : [ __FUNCTION__ ]:  ".__FUNCTION__;
    }
    function surname(){
      echo "<br>";
      echo "Method name is : [ __METHOD__ ]: ".__METHOD__;
    }
    function classname(){
      echo "<br>";
      echo "Class name is : [ __CLASS__ ]: ".__CLASS__;
    }

    function calledAmethod(){
      echo "<br> This is Amanullah Aman. Author is this class";
    }
  }

  $obj = new Aman ;
  $obj->name();
  $obj->surname();
  $obj->classname();

  Aman::calledAmethod();
?>
