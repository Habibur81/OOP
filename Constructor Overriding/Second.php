<?php
    namespace second;

    require "constructOverriding.php";
   
    use f1 as consOveriding;

    class cl extends consOveriding\cl1{

        public $num2;
        
        public function __construct($num1, $num2)
        {
            parent::__construct($num1);
            $this->num2 = $num2;
            
        }

        public function getSum()
        {
            return $this->num1 + $this->num2;
        }

    }

    // $obj = new cl(10, 20);

    // echo $obj->getSum();
