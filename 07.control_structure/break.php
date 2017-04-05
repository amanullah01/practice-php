<?php
  echo "break Statement.<br>";
  $array = array('one', 'two', 'three', 'stop', 'five');

  while(list(,$value) = each($array)){
    if($value == 'stop'){
      break;
    }
    echo "$value<br>";
  }

  // switch case
  $i = 0;
  while (++$i) {
      switch ($i) {
      case 5:
          echo "At 5<br />\n";
          break 1;  /* Exit only the switch. */
      case 10:
          echo "At 10; quitting<br />\n";
          break 1;  /* Exit the switch and the while. */
      case 15:
          echo "At 15; quitting<br />\n";
          break 2;  /* Exit the switch and the while. */
      default:
          break;
      }
  }
?>
