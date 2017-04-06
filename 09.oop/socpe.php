<?php
  Class MyScope{
    protected static $test = "This is test.";
    protected $message = 'I am using other class';

    protected function myTest(){
      echo "This is myTest function in MyScope Class.<br>";
      echo self::$test;
    }
  }

  Class OtherClass extends MyScope{
    public function otherTest(){
      echo $this->message.'<br>';
      parent::myTest();
    }
  }

  $obj = new OtherClass ;
  $obj->otherTest();
?>
