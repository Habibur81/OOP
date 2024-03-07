<?php
    class parents{
        public $a, $b;

        public function __construct($num1, $num2)
        {
            $this->a = $num1;
            $this->b = $num2;
        }
    }


    class child1 extends parents{
        public function getAdd(){
            return $this->a + $this->b;
        }
    }

    class child2 extends parents{
        public function getSubtract(){
            return $this->a - $this->b;
        }
    }


    class child3 extends parents{
        public function getMultiply(){
            return $this->a * $this->b;
        }
    }

    class child4 extends parents{
        public function getDivition(){
            return $this->a / $this->b;
        }
    }

    $child1 = new child1(10, 20);
    echo "Sum = ". $child1->getAdd(). "<br>";

    $child2 = new child2(10, 5);
    echo "Subtraction = ". $child2->getSubtract(). "<br>";

    $child3 = new child3(10, 5);
    echo "Multiply = ". $child3->getMultiply(). "<br>";

    $child4 = new child4(10, 5);
    echo "Division = ". $child4->getDivition(). "<br>";