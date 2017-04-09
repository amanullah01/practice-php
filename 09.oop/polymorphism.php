<?php
$title = 'Polymorphism | Shape';
require "../header.php";
Interface Shape{
  public function calcArea();
}

/**
 *
 */
class Circle implements Shape
{
  private $radius;
  function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function calcArea()
  {
    return 'Circle area is: '.$this->radius * $this->radius * pi() ;
  }
}

class Rect implements Shape
{
  private $height;
  private $width;
  function __construct($width,$height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function calcArea()
  {
    return '<br>Rectengel area is: '.$this->width * $this->height;
  }
}


$circle = new Circle(10);
echo $circle->calcArea();

$rect = new Rect(10,10);
echo $rect->calcArea();

require "../footer.php";
?>
