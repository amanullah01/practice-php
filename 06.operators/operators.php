<?php
  $a = 1;
  $b = 2;

  echo $a = $b +=3 ;
  echo "<br>";

  echo "Example #2 Undefined order of evaluation<br>";
  echo '$a = 5, now print $a + $a++: ';
  echo $a + $a++;
  echo "<br>";

  $array[$a] = $a++;
  print_r($array);

  echo "<br>Example #3 +, - and . have the same precedence<br>";
  $x = 4;
  echo "x minus one equals " .$x-1 . ", or so I hope\n";

  echo "x minus one equals " . ($x-1) . ", or so I hope\n";

  echo "<br>************ Ternary **************** <br>";
?>
