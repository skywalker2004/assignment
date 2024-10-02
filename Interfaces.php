<?php
// Interface declaration
interface Movable {
    public function move();
}

// Class implementing the interface
class Car implements Movable {
    public function move() {
        echo "The car is moving.\n";
    }
}

$myCar = new Car();
$myCar->move(); // Output: The car is moving.
?>
