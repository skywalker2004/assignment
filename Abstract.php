<?php
// Abstract class
abstract class Animal {
    // Abstract method (must be implemented in child class)
    abstract public function sound();

    // Regular method
    public function sleep() {
        echo "Sleeping...\n";
    }
}

// Concrete class that extends the abstract class
class Dog extends Animal {
    public function sound() {
        echo "Bark!\n";
    }
}

$dog = new Dog();
$dog->sound(); // Output: Bark!
$dog->sleep(); // Output: Sleeping...
?>
