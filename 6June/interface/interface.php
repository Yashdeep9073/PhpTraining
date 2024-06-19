<?php

    // interface InterfaceName{
    //     // public function someMethod();

    //     public function someMethod2($name,$color);
    //     // public function someMethod3() : string;
    // }

    // class Child implements InterfaceName{
    //     public function someMethod2($name,$color){  
    //         echo "Name:$name Color: $color \n";
    //     }
    // }

    // class Child2 implements InterfaceName{
    //     public function someMethod2($name,$color){
    //         echo "Name : $name Color : $color";
    //     }
    // }


    // $a = new Child();
    // $a->someMethod2('Yashdeep','Red');

    // $b =  new Child2();
    // $b-> someMethod2('Sargun','Black');



// interface MyInterfaceName {

//    public  function methodA();

//    public  function methodB();

// }   

// class MyClassName implements MyInterfaceName{
//     public function methodA(){
//         echo 'Method1 Called \n';
//     }

//     public function methodB(){
//         echo "Method2 Called";
//     }
// }

// $obj = new MyClassName;
// $obj-> methodA();
// $obj-> methodB();


// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}





?>