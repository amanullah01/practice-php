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
?>
