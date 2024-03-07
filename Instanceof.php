<?php
    class Animal{
        public function makeSound()
        {
            return "Every animal have a unique sound!!!!!!!";
        }
    }

    class Dog extends Animal {
        public function dogSound()
        {
            return "Ghooow!!!!!! Ghooow!!!!!! Ghoow!!!!!";
        }
    }

    class Cat{

    }


   $obj = new Cat();

//     if($obj instanceof Animal)
//     {
//         echo $obj->makeSound()."<br>";
//     }

//     if($obj instanceof Dog)
//     {
//         echo $obj->dogSound()."<br>";
//     }

   if($obj instanceof Animal){
        echo $obj->makeSound()."<br>";

   }else{
        echo "I am not this class object";
   }
   
   if($obj instanceof Dog){
        echo $obj->dogSound();
   }else{
        echo "I am not this class object";
   }
   

   //Instanceof key word use kora hoy je object create kora hoyeche sei object kon kon class ke represent korche.
   //Oi object je class guloke represent korche se gulo jon true value return kore. athoba false return kore.