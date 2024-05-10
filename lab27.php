<?php
$conn=mysqli_connect("localhost","root","","mydb1");
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
//sql to create table
$sql ="create table myGuests (
    id INT Auto_increment primary key,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    email varchar(50),
    reg_date timestamp
)";
if(mysqli_query($conn,$sql)){
            echo "table created successfully";
        }else{
          echo "error creating table: ".mysqli_error($conn);
        }
    mysqli_close($conn);
?>
