<?php
    class myCons{

       public $a, $b;
        
       public function __construct($num1, $num2)
       {
            $this->a = $num1;
            $this->b = $num2;
       }

       public function getFunction()
       {
            return $this->a + $this->b;
       }

    }


    $obj = New myCons(10, 100);

    echo "Sum = ". $obj->getFunction();

