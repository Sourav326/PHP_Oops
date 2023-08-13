<?php

class Calculation{
    public $a,$b,$c;

    public function sum(){
        return $this->c = $this->a + $this->b;
    }
}

$calculation = new Calculation;
$calculation->a = 10;
$calculation->b = 25;
echo $calculation->sum();

?>