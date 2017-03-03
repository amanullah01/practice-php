<?php

/**
 * Created by PhpStorm.
 * User: aman
 * Date: 3/2/17
 * Time: 2:56 PM
 */
class Visibility
{
    public $public = "Public Property";
    protected $protected = "Protected Property";
    private $private = "Private Property";

    public function printHello(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private;
    }
}
echo "<pre>";
$obj = new Visibility();
echo $obj->public;
echo "<br>";
//echo $obj->protected; //fatal error
//echo $obj->private; //fatal error

$obj->printHello(); //this function can access all private and protected property.

echo "<br>************************* MyClass ***********************<br>";
class MyClass extends Visibility{
  public $public = "Public Property 2";
  protected $protected = "Protected Property 2";

  public function printHello(){
    echo $this->public.'<br>';
    echo $this->protected.'<br>';
    echo $this->private.'<br>'; //this is undefined property.
  }
}

$obj2 = new MyClass();
var_dump($obj2);
echo $obj->public;
echo "<br>";
//echo $obj2->protected; // it shows fatal error....
echo "<br>";
echo $obj2->private; //this is undefined property.
echo "<br>";
echo $obj2->printHello();
