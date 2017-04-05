<?php
  echo "PHP Switch Statement<br>";
  $i = 2;
  switch($i){
    case 1:
      echo "This is $i";
      break;
    case 2:
      echo "This is $i";
      break;
    case 3:
      echo "This is $i";
      break;
    default:
      echo "No data matched";
  }

  echo "<br>****************</br>";
  $i = 0;
  switch ($i):
      case 0:
          echo "i equals 0";
          break;
      case 1:
          echo "i equals 1";
          break;
      case 2:
          echo "i equals 2";
          break;
      default:
          echo "i is not equal to 0, 1 or 2";
  endswitch;
?>
