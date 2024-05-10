<?php
// Parent class
class ParentClass {
    // Method to be overridden
    public function printMessage() {
        echo "This is the parent class message.\n";
    }
}

// Child class inheriting from ParentClass
class ChildClass extends ParentClass {
    // Override the printMessage method
    public function printMessage() {
        echo "This is the child class message.\n";
    }
}

// Create objects of both classes
$parentObj = new ParentClass();
$childObj = new ChildClass();

// Call the printMessage method on objects
$parentObj->printMessage(); // Output: This is the parent class message.
$childObj->printMessage();  // Output: This is the child class message.
?>
