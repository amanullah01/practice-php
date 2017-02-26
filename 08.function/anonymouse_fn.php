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

  $example = function() use($message){
    var_dump($message);
  };

  $example();

  $message = 'World';
  $example();

  //inherited by references
  $message = 'Hello';
  $example = function() use(&$message){
    var_dump($message);
  };
  $example();

  $message = 'World';
  $example();

  $example = function($arg) use($message){
    var_dump($arg . " ". $message);
  };
  $example('Hello');

  echo "<br>********************array_walk()*************<br>";
  $fruites = ['Apple', 'Orrange', 'Banana', 'Pine-apple', 'JackFruit', 'Mango'];
  print_r($fruites);

  function myFunc($value, $key){
    echo "$key has : $value <br>";
  }

  echo "<h2>Using array walk</h2>";
  array_walk($fruites, 'myFunc');

  echo "<h2>Using foreach</h2>";
  foreach($fruites as $key => $value){
    echo "$key has : $value <br>";
  }
