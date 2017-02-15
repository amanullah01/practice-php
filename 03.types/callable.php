<?php
  echo "Callable function.\n";

  function my_callback_function(){
    echo "First Callback Function.\n";
  }

  call_user_func('my_callback_function');

  class MyClass{
    static function myClassMethod(){
      echo "This is my class method. ";
    }
  }

  call_user_func(array('MyClass','myClassMethod'));

  call_user_func('MyClass::myClassMethod');
  $obj = new MyClass;
  call_user_func(array($obj,'myClassMethod'));

  // Type 5: Relative static class method call (As of PHP 5.3.0)

  class A{
    public static function who(){
      echo "A\n";
    }

    public static function me(){
      echo "Aman\n";
    }
  }

  class B extends A{
    public static function who(){
      echo "B\n";
    }
  }
  call_user_func(array('B','parent::who'));
  call_user_func(array('B','who'));
  call_user_func(array('B','parent::me'));
  call_user_func(array('A','me'));

  class C{
    public function __invoke($name){
      echo "I'm learning $name";
    }
  }
  $obj_c = new C;
  call_user_func($obj_c,'PHP!');
  echo "<br>";
  echo "\nCallback using closer.\n";

  //closed
  $double = function($a){
    return $a * 2 ;
  };

  $numbers = range(1,5);
  $new_numbers = array_map($double, $numbers);
  print implode(' ', $new_numbers);

?>
