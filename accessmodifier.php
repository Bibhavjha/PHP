<?php
class person{
    private $fname;
    private $lname;
    public function setFName($fname){
        $this->fname=$fname;
    }
    public function setLName($lname){
        $this->lname=$lname;
    }
    public function showName(){
        echo "my name is".$this->fname."".$this->lname;
    }
}
$ram=new person();
//cant be access because they are private
$ram->fname="Ram";
$shrestha->lname="Shrestha";

$ram->setFName("ram");
$shrestha->setLName ("shrestha");
?>