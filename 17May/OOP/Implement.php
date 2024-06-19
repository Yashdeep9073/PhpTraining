<?php
    //interface defination

    interface Animal{
        public function makeSound();
    }

    //class defination
    class Cat implements Animal{
        public function makeSound(){
            echo "Mewo";
        }
    }

    class Dog implements Animal{
        public function makeSound(){
            echo "Bark";
        }
    }
    
    class Mouse implements Animal{
        public function makeSound(){
            echo "Squeak";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat,$dog, $mouse);

    foreach($animals as $animal){
        $animal->makeSound();
    }
?>