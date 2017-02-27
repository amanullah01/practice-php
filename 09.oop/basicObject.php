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

  echo "<h2>Example #4 Object Assignment</h2>";
  $instance = new SimpleClass ;
  $assign = $instance ;
  $reference = &$instance ;

  $instance->var = "This is a varialbe which is also assign in assign variable";
  $instance = null ;

  var_dump($instance);
  var_dump($reference);
  var_dump($assign);

  echo "<h2>Example #5 Creating new objects</h2>";

  class Test{
    static public function getNew(){
      return new static ;
    }
  }

  class Child extends Test{

  }

  $c_obj = new Test();
  $c_obj2 = new $c_obj ;
  var_dump($c_obj === $c_obj2); // return false... because this is different object.
  var_dump($c_obj !== $c_obj2); // return true.. because this is different object.

  $c_obj3 = Test::getNew();
  var_dump($c_obj3 instanceof Test);

  $c_obj4 = Child::getNew();
  var_dump($c_obj4 instanceof Child);

  echo "<h2>Example #6 Access member of newly created object</h2>";
  echo (new DateTime())->format('Y');

  $d_obj = new DateTime();
  var_dump($d_obj);
  var_dump($d_obj->format('d'));

  echo "<h2>Example #7 Property access vs. method call</h2>";
  class Foo{
    public $bar = "This is property";

    public function bar(){
      return "<br>This is Method()<br>";
    }
  }
  $p_m_obj = new Foo ;
  echo $p_m_obj->bar;
  echo $p_m_obj->bar();
?>
