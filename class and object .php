<?php
$object =new Student;
$object->name="ram";
$object->address="ktm";
$object->facult="bim";
print_r($object); 
echo "<br>";
$object->welcome();
class Student{
    public $name,$address,$faculty;
    function welcome(){
        echo "welcome to new semester";
    }
} ?>