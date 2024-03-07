<?php
    namespace third;

    require "Second.php";
    use second as S;

    class third extends S\cl {
        public $num3;

        public function __construct($a, $b, $num3)
        {
            parent::__construct($a, $b);
            $this->num3 = $num3;
        }
        
        public function sub()
        {
            

            return parent::getSum() - $this->num3;
        }
    }

    $obj = new third(20, 30, 20);

    echo $obj->sub();