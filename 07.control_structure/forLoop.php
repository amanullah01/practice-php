<?php
  echo "For Loop Example#1<br>";
  for($i = 0; $i <= 5; $i++){
    echo "$i ";
  }

  echo "<br>For Loop Example#2<br>";
  for($j = 0; ; $j++){
    if($j >5){
      break;
    }
    echo "$j ";
  }

  echo "<br>For Loop Example#3<br>";
  $k = 0;
  for(; ;){
    if($k >5){
      break;
    }
    echo "$k ";
    $k++;
  }

  echo "<br>For Loop Example#4<br>";
  for ($l = 1, $m = 0; $l <= 5; $m += $l, print $l," ", $l++);

  echo "<br>******************************<br>";
  print_r(mt_rand(000000, 999999));

  echo "<br>*************************<br>";
  echo "<pre>";
  echo "<br>This code will be slower<br>";
  $people = array(
      array('name' => 'Kalle', 'salt' => 856412),
      array('name' => 'Pierre', 'salt' => 215863)
  );
  print_r($people);

  for($i = 0; $i < count($people); ++$i) {
      $people[$i]['salt'] = mt_rand(000000, 999999);
  }
  print_r($people);

  echo "<br>This code will be faster then previous output<br>";
  $people = array(
      array('name' => 'Kalle', 'salt' => 856412),
      array('name' => 'Pierre', 'salt' => 215863)
  );
  print_r($people);

  for($i = 0, $size = count($people); $i < $size; ++$i) {
      $people[$i]['salt'] = mt_rand(000000, 999999);
  }
  print_r($people);
?>
