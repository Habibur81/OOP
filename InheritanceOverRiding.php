<?php
    class Bap{

        public function meth()
        {
            return "I am from parent class";
        }

        public function CalSum($num1, $num2)
        {
            return $num1+$num2;
        }
    }

    class Chele extends Bap{

        public function meth(){
            return "I am from child class. I am overriding text";
        }

        public function CalSum($a, $b)
        {
            return $a + $b;
        }
    }

    //Overriding er sob gulo method er argument same hote hobe.

   $obj = new Bap();
   echo $obj->meth(). "<br>";
   echo $obj->CalSum(12, 13). "<br>";

   echo "<br>";

   $obj2 = new Chele();
   
   echo $obj2->meth(). "<br>";
   echo $obj2->CalSum(20, 40). "<br>";

