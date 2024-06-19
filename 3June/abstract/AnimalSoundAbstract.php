
<?php
abstract class Animal{
    abstract protected function makeSound();

    public function describes() {
        echo "This animal makes the sound: ".$this->makeSound()."<br> \n";
    }
}

class Dog extends Animal{
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal{
    public function makeSound(){
        return 'Mewo';
    }
}

$dog = new Dog();
$dog->describes();

$cat = new cat();
$cat->describes();
?>