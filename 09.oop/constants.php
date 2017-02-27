<?php
namespace Foo{
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

    echo "<h2>Example #3 Namespaced ::class example</h2>";
    class Bar{

    }
    echo Bar::class;

    echo "<h2>Example #4 Constant expression example</h2>";

    const ONE = 1;
    class ConstExpression{
        const TWO = ONE * 2;
        const THREE = self::TWO + ONE ;
        const ANS = "Result is : ".self::THREE;
    }
    echo ConstExpression::ANS;

    echo "<h2>Example #5 Class constant visibility modifiers</h2>";
    /*class ConstModifier {
        // As of PHP 7.1.0
    public const BAR = 'bar';
    private const BAZ = 'baz';
    }
    echo ConstModifier::BAR, PHP_EOL;
    echo ConstModifier::BAZ, PHP_EOL; */

    echo "<h2>Total second per day</h2>";
    class MyTimer{
        const sec_day = 24 * 60 * 60 ;
    }

    echo "Second per day: ".MyTimer::sec_day ;
}
?>