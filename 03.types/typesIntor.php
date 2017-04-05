<?php
    $v_bool = true; //boolean type.
    $v_int = 12;
    $v_str1 = "Hello Aman";
    $v_str2 = 'This is SG';
    $v_float = 10.021;

    echo "PHP Types<br>";
    echo gettype($v_bool);
    echo '<br>'.$v_int.' is '.gettype($v_int);
    echo '<br>'.$v_str1.' is '.gettype($v_str1);

    if(is_int($v_int)){
      $v_int += 100;
    }
    echo '<br>New int value is: '.$v_int;
?>
