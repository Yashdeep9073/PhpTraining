<?php
    //create fruit class
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;  
        }

        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
}

class Stawberry extends Fruit {
    public $weight;
    public function __construct($name,$color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro() {
        echo "The fruit is {$this->name} , the color is {$this->color} and weight is {$this->weight} gram";
    }
}

$strawberry = new Stawberry('Strawberry','red',100);
$strawberry->intro();
?>