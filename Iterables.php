<?php
class NumberIterator implements Iterator {
    private $numbers = [];
    private $position = 0;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function current() {
        return $this->numbers[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        $this->position++;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->numbers[$this->position]);
    }
}

// Using the iterable
$numbers = new NumberIterator([1, 2, 3, 4, 5]);
foreach ($numbers as $number) {
    echo $number . "\n"; // Output: 1 2 3 4 5 (each on new line)
}
?>
