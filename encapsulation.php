<?php

class Person {

// first name of person

private $name;

// public function to set value for name (setter method)

public function setName($name) {

$this->name = $name;

}

// public function to get value of name (getter method)

public function getName() {

return $this->name;

}

}

// creating class object

$ram = new Person();

// calling the public function to set fname

$ram->setName("Ram Shrestha");

// getting the value of the name variable

echo "My name is " . $ram->getName();

?>