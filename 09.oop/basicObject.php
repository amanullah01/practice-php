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

  echo '<h2>Example #2 Some examples of the $this pseudo-variable</h2>';
  echo '<h4>$this is a reference to the calling object</h4>';

  class A{
    function foo(){
      if(isset($this)){
        echo "This is defined (". get_class($this).")<br>";
      }else{
        echo "Not defined<br>";
      }
    }
  }
  class B{
    function bar(){
      A::foo();
    }
  }

  $obj2 = new A ;
  $obj2->foo();
  A::foo();

  $obj3 = new B;
  $obj3->bar();
  B::bar();
?>
