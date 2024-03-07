<?php
    class AccessModi{
        public $name = "My name is Habib";
        protected $age = 32;
        private $gender = 'male';

        public function getAge()
        {
            return $this->age;
        }

        public function getGender()
        {
            return $this->gender;
        }
    }




$obj = new AccessModi();

echo $obj->name. "<br>";
// echo $obj->age; // protected property and method can't access from out side of class 
// echo $obj->gender; // protected private and method can't access from out side of class

echo "My age is ". $obj->getAge(). "<br>";

echo "My gender is ". $obj->getGender(). "<br>";
