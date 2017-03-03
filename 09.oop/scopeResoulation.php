<?php
  class ScopeResoulation{
    const CONST_VALUE = "Hello Scope";
  }
  echo "<pre>";
  echo "<h2>Example #1 :: from outside the class definition</h2>";
  $obj = new ScopeResoulation ;
  var_dump($obj);
  echo ScopeResoulation::CONST_VALUE;
?>
