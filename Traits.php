<?php
// Trait definition
trait Logger {
    public function log($message) {
        echo "Log message: $message\n";
    }
}

// Class using the trait
class User {
    use Logger;
}

$user = new User();
$user->log("User created."); // Output: Log message: User created.
?>
