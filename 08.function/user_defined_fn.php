<?php
  echo "<h2>PHP User defined function.</h2>";

  function fn1($name = null, $age= null,$country= null){
    echo "Hello!! i'm $name. I'm $age years old and my country is $country.<br> ";
  }

  //call fn1 withe parameters.
  fn1('Amanullah Aman', 27, 'Bangladesh');

  echo "<h2>Example #2 Conditional functions</h2>";


  $data = true;
  //condfn(); // it will not work here.
  bar();
  if($data){
    function condfn(){
      echo "Hello i am condfn()<br>";
    }
  }

  if($data) condfn();
  function bar(){
    echo "Hello this is bar()<br>";
  }


?>
