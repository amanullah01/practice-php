<?php
  $title = 'Abstract Class | CAR';
  require "../header.php";
  abstract class CarStracture{
    protected $tankVolume;
    protected $carName;

    public function setVolume($name, $volume){
      $this->carName = $name;
      $this->tankVolume = $volume;
    }

    abstract protected function calculateMilage();
  }

  class Car extends CarStracture{
    public function calculateMilage(){
      return 'Car Name: '.$this->carName.'<br>Fuel: '.$this->tankVolume.' L<br>Miles: '.($this->tankVolume*30).' km';
    }
  }

  $Car = new Car ;
  $Car->setVolume('Honda',30);
  echo $Car->calculateMilage();

  require "../footer.php";
?>
