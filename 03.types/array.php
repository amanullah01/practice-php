<?php
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

?>
