<?php
  $a = [
    'a'=> 'Apple',
    'b'=> 'Banana'
  ];

  $b = [
    'a'=> 'Guava',
    'b'=> 'Strawberry',
    'c'=>'Cherry'
  ];

  echo "<pre>";
  print_r($a);
  print_r($b);

  $c = $a + $b ;
  echo "Union of \$a and \$b<br>";
  print_r($c);

  $c = $b + $a ;
  echo "Union of \$b and \$a<br>";
  print_r($c);

  echo "Example #1 Comparing arrays<br>";

  $arr1 = ['Apple', 'Banana'];
  $arr2 = [1 => 'Banana', '0' => 'Apple'];

  print_r($arr1);
  print_r($arr2);

  var_dump($arr1 == $arr2);
  var_dump($arr1 === $arr2);

?>
