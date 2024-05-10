<?php
class demo{
    public function __construct(){
        echo "construcctor....";
    }
    public function __destruct(){
        echo "destroy....";
    }
}
$obj= new demo();
?>