<?php
    echo 'Hi '.htmlspecialchars($_POST['name']);
    echo '<br>You are '.(int)$_POST['age'].' Years old';

    echo "************************************************";
    echo "<pre>";
    print_r($_POST);
 ?>
