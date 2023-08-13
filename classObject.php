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

$calculationTwo = new Calculation;
$calculationTwo->a=34.6789;
$calculationTwo->b=-12.3456;
echo "<br> Second Object<br>".$calculationTwo->sum();

?>