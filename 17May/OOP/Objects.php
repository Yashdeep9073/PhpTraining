<?php
    class Fruit {
        //Properties
        public $name;
        public $color;

        //Methods
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name; ;
        }

        function set_color($color){
            $this->color = $color;
        }

        function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    //Set Name
    $apple->set_name('Apple');
    $apple->set_color("Red");
    echo "Name: " . $apple->get_name();
    echo "<br>";
    echo "Color: " . $apple->get_color();
    echo "<br>";

    //instance 
    var_dump($apple instanceof Fruit);

?>