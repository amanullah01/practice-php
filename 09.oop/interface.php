<?php
  $title = 'Interface | CAR';
  require "../header.php";
  Interface Car{
    public function setInfo($carName,$modelName);
    public function getInfo();
  }

  class MiniCar implements Car{
    private $carName;
    private $modelName;
    public function setInfo($carName,$modelName){
      $this->carName = $carName;
      $this->modelName = $modelName;
    }

    public function getInfo(){
      return 'Car Name: '.$this->carName.'<br>Model Name: '.$this->modelName;
    }
  }

  $car = new MiniCar;
  $car->setInfo('Toyota', 'Personal');
  echo $car->getInfo();
  require "../footer.php";
?>
