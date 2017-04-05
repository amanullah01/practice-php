<?php
    class BaseClass{
        function __construct(){
            echo "This is ".__CLASS__." Constructor.<br>";
        }
    }

    class SubClass extends BaseClass{
        function __construct(){
            parent::__construct();
            echo "This is ".__CLASS__." Constructor<br>";
        }
    }

    class OtherSubClass extends BaseClass{

    }

    $obj = new BaseClass();
    $obj2 = new SubClass();
    $obj3 = new OtherSubClass();
?>