<?php
  echo "<pre>";
  define('CONSTANT', 'HELLO WORLD CONSTANT DEFINE.');
  echo CONSTANT;

  //5.3
  echo "<br>";
  const aman = 'Hello Aman';
  echo aman;

  //5.6
  echo "<br>";
  const ANOTHER_CONST = CONSTANT.'; Goodbye World';
  echo ANOTHER_CONST;

  const animals = array('Dog', 'Cat', 'Birds');
  print_r(animals);
  echo animals[1];

  //7.0
  /*define('ANIMALS', array(
      'dog',
      'Bilay',
      'bird'
  ));
  echo ANIMALS[1];*/
?>
