<?php
use Hamcrest\SelfDescribing;

    class greeting{ 
        public static function welcome(){
            echo "Hello World";
        }

        public function __construct(){  
            self::welcome();
        }
    }
    new greeting();
?>