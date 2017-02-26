<?php
  echo "<h2>Example #1 Anonymous function example</h2>";
  echo preg_replace_callback('~-([a-z])~', function ($match) {
      return strtoupper($match[1]);
  }, 'hello-world-people');

  echo "<h2>Example #2 Anonymous function variable assignment example</h2>";

  $great = function($name){
    echo "Hello $name <br>";
  };
  $great('Aman');
  $great('PHP World');

  $ar = array(
    1 => 'Hello',
    ald =>'World',
    false => 'What'
  );
  echo "<pre>";
  print_r($ar);

  echo "<h2>Example #3 Inheriting variables from the parent scope</h2>";

  $message = 'Hello';
  $example = function (){
    var_dump($message);
  };
  $example();

  //
