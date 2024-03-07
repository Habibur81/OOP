<?php
    interface PitaMata{
        public function firstMethod();
        public function secondMethod($a, $b);
        public function thirdMethod($a, $b, $c);
        //all method public
    }

    class Chele2 implements PitaMata{

        public function firstMethod(){
            return "I am a interface class. i have no arrgument";
        }

        public function secondMethod($a, $b){
            return $a + $b;
        }

        public function thirdMethod($a, $b, $c)
        {
            return $a + $b + $c;
        }
    } 


    $obj = new Chele2();

    echo $obj->firstMethod(). "<br>";
    echo "I am two argument value ". $obj->secondMethod(30, 20). "<br>";
    echo "I am three argument value ". $obj->thirdMethod(40, 20, 30). "<br>";

    


