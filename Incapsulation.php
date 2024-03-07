<?php
    class person{
        private $name;
        private $age;
        public function __construct($n, $a)
        {
            $this->name = $n;
            $this->age = $a;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function setName($n)
        {
            $this->name = $n;
        }

        public function setAge($a)
        {
            $this->age = $a;
        }
    }


    $obj = new person("Habib", 28);
    echo $obj->getName()."<br>";
    echo $obj->getAge()."<br>";

    $obj->setName('Faruk');
    $obj->setAge(26);

    echo $obj->getName()."<br>";
    echo $obj->getAge()."<br>";

    $obj->setName('Mahabur');
    $obj->setAge(20);

    echo $obj->getName()."<br>";
    echo $obj->getAge()."<br>";

    //$obj->name; can't access the private property and methods
    //private function and method class er out side theke acceess kora jai na. 
    //but same class er public function diye private property and method modify kora jai.
    //etai hosche encapsulation process. 