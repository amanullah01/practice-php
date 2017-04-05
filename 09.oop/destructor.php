<?php
    class MyDestructClass{
        function __construct()
        {
            echo "In Constructor.<br>";
            $this->name = "Hello World";
        }

        function __destruct(){
            echo "Destroying....".$this->name;
        }
    }

    $obj = new MyDestructClass();
?>