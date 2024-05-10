<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed:".mysqli_connect_errno());
}
//create database
$sql="create database mydb1";
if(mysqli_query($conn,$sql)){
    echo  "database created successfully";
}else{
    echo "error creating database:".mysqli_error($conn);
}

?>