<?php
//Access Modifiers used in both properties and methods. They help us to define where they can be accessible.
class Fruit{
    public $color = "Pink";
    protected $weight = "1kg";
    private $price = 80;
    public function apple(){ //It will be accessible anywhere
        echo '<br>Appled Function Called.'.$this->orange()." ".$this->banana();
    }
    private function orange(){  //It can be accessible only within the same class
        echo "<br>Orange Function Called";
    }
    protected function banana(){ //It will be accessable within the same class or the child class
        echo "<br>Banana Function Called.";
    }
}

$fruit = new Fruit();
$fruit->apple();

echo "<br>Color: ".$fruit->color;//we can access
echo "<br>Weight: ".$fruit->weight;//can't access
echo "<br>Weight: ".$fruit->price;//can't access
?>