<?php
    //Polymorphism hosche ekti methodke jokhon onk gulo kaj use kora hoy. ei prokiya polymorphism.
    //Abstraction, Interface, Overloading, Overriding, ei gulo diye polymorphism kora jai.
    
    class cl1{
        public function name()
        {
            return "I am from parent cls";
        }

        public function __call($name, $arguments)
        {
            if($name == "method"){
                $number = count($arguments);
                if($number == 1){
                    return "Method argument one";
                }elseif($number == 2){
                    return "Method argument two";
                }else{
                    return "Method in null";
                }
                
            }
        }
    }

    class ch1 extends cl1{

        

        public function name()
        {
            
            
            echo "I am from child cls. I am overriding method". "<br>";
            return parent::name();
        }

        
    }


    abstract class myAbscls{
        abstract public function meth1($a, $b);
    }

    class myAbschi1 extends myAbscls{
        public function meth1($a, $b)
        {
            return $a + $b;
        }
    }


    $obj =  new cl1();
    echo $obj->method(2, 8)."<br>";

    $obj1 = new ch1();

    echo $obj1->name(). "<br>";
    //echo $obj1:name(). "<br>";