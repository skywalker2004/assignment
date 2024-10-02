<?php
// Defining a namespace
namespace App\Utilities;

class Printer {
    public function printMessage($message) {
        echo $message . "\n";
    }
}

// Using the class from the namespace
$printer = new \App\Utilities\Printer();
$printer->printMessage("Hello, Namespaces!"); // Output: Hello, Namespaces!
?>
