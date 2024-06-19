<?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
// }

// // Call static method
// greeting::welcome();

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