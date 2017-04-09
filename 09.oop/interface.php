<?php
  $title = 'Interface | CAR';
  require "../header.php";
  Interface Car{
    public function setInfo($carName,$modelName);
    public function getCarInfo();
  }

  Interface Home{
    public function setHomeInfo($homeName,$location);
    public function getHomeInfo();
  }

  class Property implements Car,Home{
    private $home=[];
    private $car=[];

    public function setInfo($carName,$modelName){
      $this->car[$carName] = $modelName;
    }

    public function getCarInfo(){
      //return json_encode($this->car);
      $str = '';
      foreach ($this->car as $key => $value) {
        $str.='Car Name: '.$key.', Model: '.$value.'<br>';
      }
      return $str;
    }


    //HOme information
    public function setHomeInfo($homeName,$location){
      $this->home[$homeName] = $location;
    }
    public function getHomeInfo(){
      $hm = '';
      foreach ($this->home as $home1 => $address) {
        $hm.='Home Name: '.$home1.', Location: '.$address.'<br>';
      }
      return $hm;
    }
  }

  $property = new Property;
  $property->setInfo('Toyota', 'Personal');
  $property->setInfo('Corolla', 'X');
  $property->setInfo('Audi', 'A8');

  echo $property->getCarInfo();

  $h = new Property;

  $h->setHomeInfo('MZ House', 'Dhaka, Bangladesh');
  $h->setHomeInfo('AMN Villa', 'Nikunja, Bangladesh');
  $h->setHomeInfo('Khan Property', 'Gulshan, Bangladesh');

  echo $h->getHomeInfo();


  require "../footer.php";
?>
