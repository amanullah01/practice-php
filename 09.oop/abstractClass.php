<?php
  abstract class AbstractClass{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printValue(){
       print_r($this->getValue());
    }
  }

  class ChildClass1 extends AbstractClass{
    protected function getValue(){
      $a = [1,2,3,4];
      return $a;
    }

    public function prefixValue($prefix){
      echo $prefix;
    }
  }

  class ChildClass2 extends AbstractClass{
    protected function getValue(){
      $a = [1,2,3,4,5,6,7];
      return $a;
    }

    public function prefixValue($prefix){
      echo $prefix;
    }
  }

  $obj1 = new ChildClass1 ;
  $obj1->printValue();
  $obj1->prefixValue('Aman');
  echo "<br>******************<br>";
  $obj2 = new ChildClass2 ;
  $obj2->printValue();
  $obj2->prefixValue('Amanullah Aman');


  echo "<br>*****************<br>";

  abstract class Test{
    abstract protected function name($prefix,$name);
    function __construct(){
      echo "hello<br>";
    }
  }
  class foo extends Test{
    public function name($prefix,$name,$sep='.'){
      echo $prefix.$sep.$name;
    }
  }

  $obj3 = new foo;
  $obj3->name('Mr','Amanullah');
?>
