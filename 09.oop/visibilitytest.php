<?php
  class MyVisibility{
    public $public = 'This is public';
    protected $protected = 'This is protected';
    private $private = 'This is private';

    public function all(){
      echo "<br>All <br>";
      echo $this->public."<br>";
      echo $this->protected."<br>";
      echo $this->private."<br>";
    }
  }

  class otherClass extends MyVisibility{
    public $public = 'test';
    function otherFn(){
      echo '<br>This is other function </br>';
      echo $this->public;
      //echo $this->protected;
    }

    public function all(){
      echo "<br>All <br>";
      echo $this->public."<br>";
      echo $this->protected."<br>";
    }
  }

  $obj = new MyVisibility ;
  $obj2 = new otherClass ;
  //echo $obj->public;
  //echo $obj->protected;
  //echo $obj->private;

  $obj->all();
  echo "<br>************</br>";
  //$obj2->otherFn();
  echo "<br>";
  //echo $obj2->public;
  echo $obj2->all();
 ?>
