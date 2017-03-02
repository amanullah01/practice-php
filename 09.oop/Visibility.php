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

$obj = new Visibility();
echo $obj->public;
echo "<br>";
//echo $obj->protected; //fatal error
//echo $obj->private; //fatal error

$obj->printHello(); //this function can access all private and protected property.