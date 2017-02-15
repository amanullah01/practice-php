<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

  $family = [
    "H" => "Aman",
    "W" => "MZ",
  ];
  echo "<pre>";
  print_r($family);

  echo "The key can either be an integer or a string. The value can be of any type.";
  $array2 = array(
      1    => "a",
      "1"  => "b",
      1.5  => "c",
      true => "d",
  );
  var_dump($array2);

  $array3 = array("foo", "bar", "hello", "world");
  var_dump($array3);

  $array4 = array("foo", "bar", "6"=>"hello", "world");
  var_dump($array4);

  echo "Example #6 Accessing array elements";
  $array5 = [
    'a' => 'Aman',
    'm' => 'Monnuzan',
    'family' => [
      'Aman' => 'Husband',
      'Monnuzan' => 'Wife'
    ]
  ];

  var_dump($array5);
  echo $array5['a'].'<br>';
  echo $array5['m'].'<br>';
  var_dump($array5['family']);

  echo "Example #7 Array dereferencing";
  function getArray() {
    return array(1, 20, 3);
  }

  // on PHP 5.4
  var_dump(getArray());
  echo $secondElement = getArray()[1];

  echo "<br>*****Add and remove data from an array";

  $array6 = [5 => 10, 12 => 20];
  var_dump($array6);

  $array6[] = 30 ; // add 30 in array6
  var_dump($array6);
  $array6['20'] = 40; //add 40 in array 6
  var_dump($array6);
  unset($array6['5']); //remove index 5 fromm array6
  var_dump($array6);
  unset($array6); //remove all data from array 6
  var_dump($array6);

  echo "<br>****Re-indexd Array*********";
  $array7 = [1,2,3,4,5,6];
  print_r($array7);
  foreach($array7 as $index=>$value){
    unset($array7[$index]);
  }
  echo "<br>After removing array indexes";
  print_r($array7);
  echo "Add new element in array7<br>";
  $array7[] = 8;
  $array7[] = 9;
  print_r($array7);
  echo "Re index array.<br>";
  $array7 = array_values($array7);
  print_r($array7);

  //bad practice.
  $foo[bar] = 'enemy';
  echo $foo[bar];

  echo "\nArrays do and dont \n";

  $array8 = array(1, 2);
  print_r($array8);
  $count = count($array8);
  for($i = 0; $i < $count; $i++){
    echo "\n Checking $i \n";
    echo "Bad:".$array8['$i']."\n";
    echo "Good:".$array8[$i]."\n";
    echo "Bad:{$array8['$i']}\n";
    echo "Good: {$array8[$i]}\n";
  }

  echo "Example #9 Collection\n";

  $colors = array('red', 'blue', 'green', 'yellow');

  foreach ($colors as $color) {
      echo "Do you like $color?\n";
  }

  foreach ($colors as &$color) {
      $color = strtoupper($color);
  }
  unset($color);
  print_r($colors);

  echo "Example #11 One-based index\n";

  $fq = [1=>'January', 'February', 'March'];
  print_r($fq);

  $te = [
    'Hello',
    5 =>'Number 5',
    'It will be 6',
    3 => 'Defined 3',
    'What it will be?'
  ];

  print_r($te);

  echo "Copy by referance\n";

  $ref_arr1 = [1,2];
  echo "Array1: \n";
  print_r($ref_arr1);
  $ref_arr2 = $ref_arr1;
  $ref_arr2[] = 3;
  echo "Array1: \n";
  print_r($ref_arr1);
  echo "Array2: \n";
  print_r($ref_arr2);

  $ref_arr3 = &$ref_arr1;
  $ref_arr3[] = 10;
  echo "Array3 and Array 1\n";
  print_r($ref_arr3);
  print_r($ref_arr1);


?>
