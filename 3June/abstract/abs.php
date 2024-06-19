<?php
    // abstract class Car{
    //     public $name;
    //     public function __construct($name){
    //         $this->name = $name;
    //     }

    //     abstract public function intro() : string;


    // }

    // class Audi extends Car{
    //     public function intro() : string{
    //         return "Choose german quality ! i'm an $this->name";
    //     }
    // }

    // $audi = new Audi("Audi");
    // echo $audi->intro();

    abstract class Student{
        public $name;
        public $class;

        public function __construct ($name, $class){
            $this->name = $name;
            $this->class = $class;
        }

        abstract public function getDetails () : string;
    };

//child class
    class Yash extends Student{
        public function getDetails () : string{
            return "Name = $this->name Singh and Class = $this->class";
        }
    }

    $yash = new Yash("Yashdeep","12th");
    echo $yash->getDetails();

//example 

// abstract class Parnt {
//     abstract protected function prefixName($name, $gender);
// }

// class Child extends Parnt {
//     // Implement the abstract method with the same signature
//     public function prefixName($name, $gender) {
//         return $this->getPrefixName($name, $gender);
//     }

//     // Additional method to handle optional parameters
//     public function getPrefixName($name, $gender, $separator = ".", $greet = "Dear") {
//         if ($gender == "Male" || $gender == "male") {
//             $prefix = "Mr";
//         } elseif ($gender == "Female" || $gender == "female") {
//             $prefix = "Mrs";
//         } else {
//             $prefix = "";
//         }

//         return "{$greet} {$prefix}{$separator} {$name}";
//     }
// }

// $class = new Child;
// echo $class->prefixName("Yashdeep", "female");



?>

