<?php

    // abstract class ParentClass { 
    //     abstract public function someMethod1();
    //     abstract public function someMethod2($name, $color);
    //     abstract public function someMethod3() : string;
    // }

    abstract class Car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }

    }

    //child classs
    class Audi extends Car{
        public function intro():string{
            return "Chose german quality,I'm $this->name !!";
        }
    }        
    class Volvo extends Car{
        public function intro():string{
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }        
    class Toyota extends Car{
        public function intro():string{
            return "Proud to be Japanese! I'm a $this->name!";
        }
    }       
    
    //create obj from classes
    $audi = new Audi('Audi R-8');
    echo "<h1>";
    echo $audi->intro();
    echo "<br>";
    echo "</h1>";


    $volvo = new Volvo("Volvo X-3");
    echo "<h1>";
    echo $volvo->intro();
    echo "<br>";
    echo "</h1>";


    $toyota = new Toyota("Supra MK-4");
    echo "<h1>";
    echo $toyota->intro();
    echo "<br>";
    echo "</h1>";

?>