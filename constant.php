<?php
//Contants are used to define values which are not changes in the programme
    class Mobile{
        const BRAND = "Apple";//Constant define with const keyword
        function brandName(){
            echo self::BRAND;//Use the constant within the same class
        }
    }

    echo Mobile::BRAND;//We can access the contant directly with className::(Scope Resolution Operatore)ConstantName
    $mobile = new Mobile();
    $mobile->brandName();
?>