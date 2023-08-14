<?php
    //It is defined as the over riding of properties and methods

    class Fruit{
        public $name = "Apple";
        public function color(){
            echo "<br>Color is Red.";
        }
    }

    class Apple extends Fruit{
        public function color(){
            echo "<br>This is Green Apple.";
        }

    }
    $apple = new Apple();
    echo $apple->name = "Orange";//We Override the fruit name property
    $apple->color();
?>