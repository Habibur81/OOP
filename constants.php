<?php
    class myClass{
        const str = "I am a constant variable";
        const str1 = "I am a constant variable, I call from Method";

        public function ConsMethod(){
            return self::str1; //constant variable call in method by self key word.
        }
    }


    echo myClass::str."<br>";

    $obj = new myClass();

   echo $obj->ConsMethod();

