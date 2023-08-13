<?php
    class Student{
        public function __construct(//contructor property promotion in PHP 8
            public $name = "No Name",
            public $age = 0
        ){}
        public function name(){
            return $this->name;
        }
        public function age(){
            return $this->age;
        }
    }

    $student1 = new Student("Sourav",26);
    echo $student1->name();
    echo "---- I am ".$student1->age(). " Years old.";
?>