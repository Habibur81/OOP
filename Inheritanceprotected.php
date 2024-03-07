<?php
    class parents{
        public $a, $b;
        protected $add;

        public function __construct($num1, $num2)
        {
            $this->a = $num1;
            $this->b = $num2;
        }


    }
    class child1 extends parents{
        public function getAdd(){
            $this->add = $this->a + $this->b;
            return $this->add;
        }
    }

    $child = new child1(50, 30);

    echo "Two number sum is ". $child->getAdd();