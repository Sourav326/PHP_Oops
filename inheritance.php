<?php
    class Calculation{//Parent/Base class

        public function __construct(
            public $a = 0,
            public $b = 0
        ){}

        public function sum()
        {
            return ($this->a + $this->b);
        }
    }

    class Formula extends Calculation{ //Chils/Derived class
        public function subs(){
            return "Class Formula";
        }
    }

    $formula = new Formula(2,50);
    echo $formula->sum();
    echo $formula->subs();


?>