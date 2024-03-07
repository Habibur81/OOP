<?php
    class baba {
        public function babapodobi()
        {
            return "Mondol";
        }

        public function babaname()
        {
            return "Siraz Uddin";
        }
    }

    trait ma{
        public function mapodobi()
        {
            return "Goni";
        }

        public function maname()
        {
            return "Bannacha Begum";
        }
    }

    trait bhai{
        public $name = "Faruk Islam";
    }

    class kids extends baba{
        use ma;
        use bhai;
    }


    $obj = new kids();

    echo "My father title is ". $obj->babapodobi(). " name is ". $obj->babaname(). "<br>";
    echo "My Mother title is ". $obj->mapodobi(). " name is ". $obj->maname(). "<br>";
    echo "My Brother name is ". $obj->name. "<br>";