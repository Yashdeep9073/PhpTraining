<?php
// trait TraitName {
//     public function msg1() {
//         echo "OOP is fun!";
//     }
// }

// class Welcome{
//     use TraitName;
// }

// $obj = new Welcome();
// // $obj->msg1();

// trait message1{
//     public function msg2(){
//         echo "OOP is fun !";
//     }
// }

// trait message2{
//     public function msg3(){
//         echo "Oop reduces code duplication";
//     }
// }

// class welcome2{
//     use message2;
// }


// $c = new welcome2();
// $c->msg3();

interface Logger{
    public function log($message,$level);
}

class DemoLogger implements Logger{
    public function log($message,$level){
        echo "Logged Message : $message with level $level ";
    }
}



?>
