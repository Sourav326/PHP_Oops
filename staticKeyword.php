<?php
//with static keywordwe can get the static function or property directoly without creating the 
//object of class-- as ClassName::(scope Resolution Operator)function/property Name

//A class will be static if all the function and properties within the class are static otherwise it's not a static class
    class A{
        static $name="<br>Sourav Chauhan";
        static function aa(){
            echo "aa";
        }
        static function ab(){
            return self::$name;//instead of this keyword, in static we use self
        }
    }

    class B extends A{
        function ba(){
            echo parent::$name;//In child class we use the parent keyword to access the parent method/properties
        }
    }

    A::aa();
    echo A::$name;

    $b = new B();
    $b->ba();

    //The above class is a static class as all the methods and properties of this class are static
?>