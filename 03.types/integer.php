<?php
//phpinfo();
  $num1 = 9223372036854775807;
  echo gettype($num1);
  var_dump($num1);

  echo "<br>";
  $num2 = 9223372036854775808;
  echo gettype($num2);
  var_dump($num2);

  echo "<br>";
  $million = 1000000;
  $large_number =  50000000000000 * $million;
  echo gettype($large_number);
  var_dump($large_number);

  echo "<br>Convert into integer: 25/7 = ??";
  var_dump(25/7);
  var_dump((int)(25/7));
  var_dump((int)(25/7));
  var_dump(round(25/7));

  echo (int) ( (0.1+0.7) * 10 ); // echoes 7!

  echo "<br> Convert 'Hello' string into integer: ";
  echo (int)'Hello';
?>
