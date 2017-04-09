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
    private $car=[];
    public function setInfo($carName,$modelName){
      // $this->carName = $carName;
      // $this->modelName = $modelName;
      $this->car[$carName] = $modelName;
    }

    public function getInfo(){
      //return json_encode($this->car);
      $str = '';
      foreach ($this->car as $key => $value) {
        $str.='Car Name: '.$key.', Model: '.$value.'<br>';
      }
      return $str;
    }
  }

  $car = new MiniCar;
  $car->setInfo('Toyota', 'Personal');
  $car->setInfo('Corolla', 'X');
  $car->setInfo('Audi', 'A8');
  //echo "<pre>";
  //print_r($car->getInfo());
  echo $car->getInfo();
  //echo $car->getInfo();
  require "../footer.php";
?>
