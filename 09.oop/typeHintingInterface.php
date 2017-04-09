<?php
  $title = 'Type Hinting Interface | Cars';
  require "../header.php";
  Abstract class Cars{
    protected $model;
    protected $height;

    abstract public function calcTankVol();
  }

  class BMW extends Cars{
    private $rib;
    public function __construct($model,$rib,$height){
      $this->model = $model;
      $this->rib = $rib;
      $this->height = $height;
    }

    public function calcTankVol(){
      return $this->rib * $this->rib * $this->height;
    }
  }

  class Mercedes extends Cars{
    private $radius;
    public function __construct($model,$radius,$height){
      $this->model = $model;
      $this->radius = $radius;
      $this->height = $height;
    }

    public function calcTankVol(){
      return $this->radius * $this->radius * pi() * $this->height;
    }
  }

  function calcTankPrice(Cars $car, $pricePerGallon){
    return $car->calcTankVol() * 0.004932 * $pricePerGallon.' $' ;
  }

  $bmw = new BMW('abcdefg', 10, 20);
  echo calcTankPrice($bmw,3);

  echo "<br>";

  $mercedes = new Mercedes('mar', 5, 12);
  echo calcTankPrice($mercedes,3);

  require "../footer.php";
?>
