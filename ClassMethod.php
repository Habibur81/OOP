<?php
    class myClass{
       public $a, $b;
        
       public function setFucntion($a, $b)
       {
            $this->a = $a;
            $this->b = $b;
       }

       public function getFunction()
       {
            return $this->a + $this->b;
       }

    }

$obj = new myClass();

$obj->setFucntion(10, 20);

echo "Sum = ".$obj->getFunction();