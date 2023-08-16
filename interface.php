<?php
    //It solves the multiple inheritance problem.
    //It contains only abstract methods
    //It con't contain any property/variable
    //You can't create object/instancw of Interface

    interface A{
        const TEST_VARIABLE = "Test";
        function aa();
        function ab($a,$b);//variables must also of same type and number
    }

    interface B{
        function ba();
        function bb();
    }

    class C implements A,B{
        function aa(){
            echo "<br>Function aa called inside Class C.";
        }
        function ab($a,$b){
            echo "<br>Function ab called inside Class C. ----- ".$a+$b;
        }
        function ba(){
            echo "<br>Function ba called inside Class C";
        }
        function bb(){
            echo "<br>Function bb called inside Class C.";
        }
    }

    $c = new C();
    $c->aa();
    $c->ab(3,6);
    $c->ba();
    $c->bb();


?>