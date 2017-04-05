<?php
  $arr1 = ['1'=>'foo', '2'=>'bar'];
  $obj = (object)$arr1;

  echo "<pre>";
  var_dump($arr1);
  var_dump($obj);

  var_dump(isset($obj->{'1'}));
  var_dump(key($obj));

  $obj2 = (object) 'Amanullah Aman';
  print_r($obj2);
  echo $obj2->scalar;  // outputs 'ciao'
?>
