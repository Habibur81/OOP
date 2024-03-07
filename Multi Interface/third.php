<?php
    namespace th;

    require_once "first.php";
    require_once "second.php";

    use in1;
    use in2;

    class person implements in1\inter1, in2\inter2{
        public function name()
        {
            return "I am Habib ";
        }

        public function age($str)
        {
            return "I am ". $str ." years old ";
        }

        public function gender()
        {
            return "gender male ";
        }

        public function phone()
        {
            return "phone number 01750-918981";
        }
    } 


    $per = new person();

    echo $per->name(). $per->age(28). $per->gender(). $per->phone();


