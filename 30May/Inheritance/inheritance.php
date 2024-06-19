<?php

final class Car{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name = $name;
        $this->color= $color;
    }

    protected function intro(){
        echo "The car is {$this->name} and the color is {$this->color}";
    }
}

//Audi is inherirted from Car
// class Audi extends Car{
    
//     public function message(){
//         echo "Am I a Car or bike?";

//         $this->intro();
//     }
// }

class Audi extends Car{
    public $weight;

    public function __construct($name,$color,$weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}

$audi = new Audi("AudiR-8","Red",50);
// $audi->message();
$audi->intro();
?>