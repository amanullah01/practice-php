<?php
    $data = array();

    for($i = 1; $i<=10 ; $i++){
      $data[$i]['id'] = $i+10;
      $data[$i]['name'] = 'Aman_'.($i+10);
    }
    echo "<pre>";
    print_r($data);
?>
