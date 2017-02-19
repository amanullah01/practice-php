<?php
  $arr = array(1, 2, 3, 4);
  foreach ($arr as &$value) {
    $value = $value * 2;
  }
  unset($value);
  echo "<pre>";
  print_r($arr);

  echo "<br>********************</br>";
  $arr1 = array("one", "two", "three");
  print_r($arr1);
  reset($arr1);
  print_r($arr1);

  while(list(,$value) = each($arr1)){
    echo "Value: $value<br />\n";
  }
  echo "<br>*********************</br>";
  foreach ($arr1 as $value) {
      echo "Value: $value<br />\n";
  }

  echo "<br>*****************Key value************</br>";
  $arr2 = array("one", "two", "three");
  reset($arr2);
  while (list($key, $value) = each($arr2)) {
      echo "Key: $key; Value: $value<br />\n";
  }

  foreach ($arr2 as $key => $value) {
      echo "Key: $key; Value: $value<br />\n";
  }

  echo "<br>******* Multidimensional Array**************</br>";
  $a = array();
  $a[0][0] = "a";
  $a[0][1] = "m";
  $a[1][0] = "a";
  $a[1][1] = "n";

  foreach ($a as $v1) {
      foreach ($v1 as $v2) {
          echo "$v2\n";
      }
  }

  $abc = ['aman','black','brown'];
  print_r($abc);
  list($name,$color,$c2) = $abc;
  echo $c2;

  $array = [
    [1, 2],
    [3, 4],
  ];

  foreach ($array as list($a, $b)) {
      // $a contains the first element of the nested array,
      // and $b contains the second element.
      echo "A: $a; B: $b\n";
  }
?>
