<?php
$title = 'Type Hinting | Cars';
require "../header.php";
/**
 *
 */
class Car
{
  public function calcMilage(array $cars){
    $i = 1;
    foreach($cars as $car){
      echo "Car $i :".$car[0]. ", Model: $car[1], Milage: $car[2] <br>";
      $i++;
    }
  }
}

$c = new Car();
$cars =[
  ['BMW','X1',25],
  ['Audi','A8',15],
  ['Honda','h5',12]
];
$c->calcMilage($cars);

require "../footer.php";
?>
