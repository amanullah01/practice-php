<?php
  $a = 5;
  $b = 5;

  if($a > $b){
    echo "$a is grather then $b";
  }elseif($a==$b){
    echo "$a is equal to $b";
  }else{
    echo "$a is less then $b";
  }

  echo "<br>******************<br>";

  $c = 15;
  $d = 12;

  if($c > $d):
    echo "$c is grather then $d";
    elseif($c == $d):
      echo "$c is equal to $d";
    else:
      echo "$c is less then $d";
  endif;
?>
