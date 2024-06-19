<?php
    class Fruits{
        //properties
        public $name;
        public $color;

        function setName($name){
            $this->name = $name;
        }
        
        function getName(){
            return $this->name;
        }
        
        function setColor($color){
            $this->color = $color;
        }
        
        function getColor(){
            return $this->color;
        }
    }

    $apple = new Fruits();
    $apple->setName("apple");
    $apple->setColor("red");

    echo '<pre>';
    echo $apple->getName();
    echo '<br>';
    echo $apple->getColor();
?>