<?php
    class Goodbye{
        const LEAVING_MESSAGE = "Thank you for visiting ";

        public function bye(){
            echo self::LEAVING_MESSAGE;
        }
    }
    $goodbye = new Goodbye();
    $goodbye->bye();
?>