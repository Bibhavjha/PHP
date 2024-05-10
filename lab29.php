<?php
$conn=mysqli_connect("localhost","root","","mydb");
if(!$conn){
    die("connection failed:".mysqli_connect_errno());
}
$sql =" select * from myguests";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "id:".$row["id"],"-name:",$row["firstname"]."".$row["lastname"]."".$row["email"]."<br>";
    }
}else{
    echo "no result";
}
?>