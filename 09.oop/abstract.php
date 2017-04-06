<?php
  require "../header.php";
  abstract /**
   *
   */
  class MyAbstract
  {
    var $val;
    abstract protected function getValue();
    abstract protected function getPrefix($pre);

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
      return 'This is get value from class name 1';
    }

    public function getPrefix($pre){
      return '<br>'.$pre.' this is prefix';
    }
  }

  $c1 = new ClassName1();
  echo $c1->getPrint();
  echo $c1->getPrefix('Aman');

require "../footer.php";
?>
