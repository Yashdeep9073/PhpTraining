<?php
        class Fruit{
            public $name;
            public $color;

            public function __construct($name,$color){
                $this->name = $name;
                $this->color = $color;
            }


            public function Intro(){
                echo "The Fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        class Strawberry extends Fruit{
            public function message(){
                echo "Am I a fruit or berry";
            }
        }

        $strawberry = new Strawberry("Strawberry🍓","Red");
        $strawberry ->message();
        $strawberry->Intro();

?>