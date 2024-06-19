<?php
    class Goodbye{
        const message = "Thank for visiting,Hunkjnkjhwkef";

        public function bye(){
            echo self :: message;
        }
    }

    // echo Goodbye::message;

    $goodbye =  new Goodbye();  
    $goodbye->bye();
?>