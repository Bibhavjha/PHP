<?php
$conn=mysqli_connect("localhost","root","","sample_database");
if(!$conn){
    die("connectio failed:".mysqli_connect_errno());
}
$sql= " select sum(amount) as total_payment from payments";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row;
    }
}else{
    echo "no result";
}
?>