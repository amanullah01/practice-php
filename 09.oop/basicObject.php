<?php
  echo "<h2>Example #1 Simple Class definition</h2>";
  class SimpleClass{
    public $var = "This is a ".__CLASS__."<br>";

    public function simpleMethod(){
      echo $this->var;
    }
  }

  $obj1 = new SimpleClass ;
  $obj1->simpleMethod();
?>
