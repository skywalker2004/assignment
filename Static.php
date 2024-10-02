<?php
class MathOperations {
    // Static property
    public static $pi = 3.1416;

    // Static method
    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Accessing static property and method without creating an instance
echo "Pi value: " . MathOperations::$pi . "\n"; // Output: Pi value: 3.1416
echo "Circle area: " . MathOperations::circleArea(5) . "\n"; // Output: Circle area: 78.54
?>
