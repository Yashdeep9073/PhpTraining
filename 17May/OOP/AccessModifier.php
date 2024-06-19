<?php
    // class Fruit{
    //     public $name;
    //     protected $color;
    //     private $weight;

    // }
    // $mango = new Fruit;
    // $mango->name = "Mango";
    // $mango->color = "Yellow";
    // $mango->weight = "30";

    class Fruit{
        public $name;
        public $color;
        public $weight;

        function set_name($n){
            $this->name = $n;
        }

        protected function set_color($n){
            $this->color = $n;
        }
        
        private function set_weight($n){
            $this->weight = $n;
        }

    }
    $mango = new Fruit;
    $mango->set_name("Mango");
    $mango->set_color("Yello");
    $mango->set_weight("200");
?>