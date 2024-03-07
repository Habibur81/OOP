<?php
    abstract class Parents{
        public $num1, $num2;
        abstract public function  MyabstractMethod();
        abstract protected function  MySum($num, $num1);
        //method can do public and protected
    }

    class Chele1 extends parents{

        public $a, $b;

        public function __construct($num1, $num2)
        {
            $this->a = $num1;
            $this->b = $num2;
        }

        public function MyabstractMethod()
        {
            return $this->a * $this->b;
        }

        public function MySum($num, $num1){
            return $num + $num1;
        }
    }


    $obj = new Chele1(10, 30);

    echo "Multiply is = ". $obj->MyabstractMethod(). "<br>";

    echo "Sumation is = ". $obj->MySum(20, 30). "<br>";