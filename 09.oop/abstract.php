<?php
  $title ='Abstract Class';
  require "../header.php";
  abstract /**
   *
   */
  class MyAbstract
  {
    var $val;
    var $tax;
    abstract protected function getValue();
    abstract protected function getPrefix($pre);
    abstract protected function getTax($tax);

    public function getPrint(){
      return $this->getValue();
    }
  }

  /**
   *
   */
  class ClassName1 extends MyAbstract
  {
    protected function getValue(){
      return 'Test get value';
    }

    public function getPrefix($pre){
      return '<br>'.$pre.' this is prefix';
    }

    public function getTax($tax){
      return '<br>BDT '.((float)$tax*.15);
    }

    public function testM(){
      echo '<br>This is test method.';
    }
  }

  $c1 = new ClassName1();

  echo $c1->getPrint();
  echo $c1->getPrefix('Aman');
  echo $c1->getTax(200);
  $c1->testM();


require "../footer.php";
?>
