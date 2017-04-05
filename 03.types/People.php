<?php
  $juices = array("apple", "orange", "koolaid1" => "purple");
  echo "He drank some $juices[0] juice.<br>".PHP_EOL;

  class People{
    public $john = "Aman";
    public $doe = "Monnuzan";
  }

  $people = new People();

  echo "$people->john drank $juices[0] juice<br>";
  echo "$people->john say hello to $people->doe";
?>
