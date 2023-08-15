<?php
    abstract class A{
        abstract protected function show();//this is declared as protected so the child class must declare it by protected or public not private
       
    }

    class B extends A{
        public function greeting(){
            echo "Good Morning";
        }
        public function show(){
            echo "<br>Abstract Function Show of abstract class A";
        }
    }

    $b = new B();
    $b->greeting();
    $b->show();

?>