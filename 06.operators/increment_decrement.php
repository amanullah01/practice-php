<?php
  echo "<h3>Post Increment[a++]. a = 5</h3>";
  $a = 5;
  echo "Should be 5 =".  $a++ ."<br>";
  echo "Should be 6 = ". $a." <br>";

  echo "<h3>Pre Increment[++b]. b = 5</h3>";
  $b = 5;
  echo "Should be 6 =".  ++$b ."<br>";
  echo "Should be 6 = ". $b." <br>";

  echo "<h3>Post Decrement[c--]. c = 5</h3>";
  $c = 5;
  echo "Should be 5 =".  $c-- ."<br>";
  echo "Should be 4 = ". $c." <br>";

  echo "<h3>Pre Decrement[--d]. d = 5</h3>";
  $d = 5;
  echo "Should be 4 =".  --$d ."<br>";
  echo "Should be 4 = ". $d." <br>";

  echo '== Alphabets ==' . PHP_EOL;
  $s = 'W';
  for ($n=0; $n<6; $n++) {
      echo ++$s . PHP_EOL;
  }

  $d = 'A08';
  for ($n=0; $n<6; $n++) {
      echo ++$d . PHP_EOL;
  }
?>
