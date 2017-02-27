<?php
    echo "<h2>Example #1 Defining and using a constant</h2>";
    class MyConstClass{
        const CONSTANT = "THIS IS CONSTANT";

        function showConstant(){
            echo self::CONSTANT ;
        }
    }

    $obj = new MyConstClass();
    $obj->showConstant().'</br>';
    echo '<br>'.MyConstClass::CONSTANT ;

    echo '<br>'.$obj::CONSTANT;
    echo "<br>";
    MyConstClass::showConstant();
?>