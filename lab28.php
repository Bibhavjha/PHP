<?php
$servername="localhost";
$useraname="root";
$password="";
$dbname="myDB1";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
     $sql="insert into myguests(firstname,lastname,email)
     values ('bibhav','jha','bibhav@gmail.com')";
     if(mysqli_query($conn,$sql)){
                echo "data entered successfully";
            }else{
              echo "error entring data: ".mysqli_error($conn);
            }
        mysqli_close($conn);

?>
