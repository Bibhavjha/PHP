<?php
$conn=mysqli_connect("localhost","root","","mydb");
if(!$conn){
    die("connection failed:".mysqli_connect_errno());
}
$sql ="select * from myguests";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<h2> Guest List </h2>";
    echo "<table border='1'>
            <tr> <th>ID </th>
            <th> first name</th>
            <th> last name</th>
            <th> email</th>";

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row["id"]."</td>
    <td>".$row["firstname"]."</td>
    <td>".$row["lastname"]."</td>
    <td>".$row["email"]."</td>";
}
echo "</table>";
}else{
    echo "no recurds found";
}
mysqli_close($conn);
?>