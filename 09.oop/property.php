<?php
  class Test{
    public $p1 = "Amanullah";
    protected $p2 = "Aman";
    private $p3 = "Khan";
    static $p4 = "Sujon";

    public function retArray(){
      return (array)$this;
    }
  }

  $obj = new Test ;
  echo "<pre>";
  print_r($obj->retArray());

?>
