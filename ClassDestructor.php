<?php
    class MyDestruct{
        public $a, $b;

        public function __construct($num1, $num2)
        {
            $this->a = $num1;
            $this->b = $num2;
        }

        public function __destruct()
        {
            echo $this->a + $this->b;
            //return $this->a + $this->b;

        }
    }


   $obj = New MyDestruct(20, 30);

   //echo $obj->__construct();

   // $obj->__destruct();


