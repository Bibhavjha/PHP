<?php
$servername="localhost";
$useraname="root";
$password="";
$dbname="case4";
//create connection
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
else{
    echo "connected";
}
?>