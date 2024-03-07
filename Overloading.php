<?php

    // function add(int $num1, int $num2): int
    // {
    //     return $num1+$num2;
    // }

    // function add(int $num1, int $num2, int $num3)
    // {
    //     return $num1 + $num2 + $num3;
    // }

    //This is the function overloading example but php not support same function name one more time. 
    //so other language is supported. but php is not supported this.

    class Shap{
        const PI = 3.1416;

        public function __call($name, $arguments)
        {   
            if($name == "area"){
                switch(count($arguments)){
                    case 0:
                        return "There is no argument";
                        break;
                    case 1:
                        return self::PI * $arguments[0];
                        break;  
                    case 2: 
                        return $arguments[0] * $arguments[1];
                        break;
                }
            }
            
        }
    }
    

    $circle = new Shap();
    echo "Circle area = ". $circle->area(10). "<br>";

    $ractangle = new Shap();
    echo "Ractangle area = ". $ractangle->area(10,20). "<br>";