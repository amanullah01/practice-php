<?php
  echo "<h2>Function arguents.</h2>";
  echo "<h3>Example #1 Passing arrays to functions</h3>";

  function arrayFn($arr1){
    echo "$arr1[0] + $arr1[1] = ", $arr1[0] + $arr1[1] ;
    echo "<br>";
  }

  $arr1 = [10,20];
  arrayFn($arr1);

  echo "<h2>Passing function parameters by Reference</h2>";

  function fnByRef(&$string){
    $string.=' And this is some extra.<br>';
  }
  $string = "This is passing parameters";
  fnByRef($string);
  echo $string;

  echo "<h2>Example #3 Use of default parameters in functions</h2>";

  function makecoffee($type = "cappuccino"){
      return "Making a cup of $type. <br>";
  }
  echo makecoffee();
  echo makecoffee(null);
  echo makecoffee('epresso');

  echo "<h2>Example #4 Using non-scalar types as default values</h2>";
  function makeCoffee2($type = array('cappuccino'), $coffeeMaker = null){
    $device = is_null($coffeeMaker) ? 'Hands' : $coffeeMaker;
    return "Making a cup of ".join(",",$type)." with ".$device.".<br>";
  }
  echo makeCoffee2();
  echo makeCoffee2(array('cappuccino','epresso'),"Blander");
?>
