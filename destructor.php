<?php
    class Car{
        public function __destruct(){
            echo "<br>Car Class Destructed";
        }
        public function __construct(){
            echo "<br>Car class Constructur called.";
        }
        public function swiftDesire(){
            echo "<br> Swift called.";
        }
    }

    $car = new Car();
    $car->swiftDesire();
    
?>