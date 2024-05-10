
 <?php
// $filename="college.txt";
// $file=fopen($filename,"w");
// if($file==false){
//     echo "error in opening new file";
//     exit();
// }
// fwrite($file,"NCC is not my college");
// fclose($file);
// $file=fopen($filename,"r");
// if($file==false){
//     echo "error in openeing file";
//     exit();
// }
// while(!feof($file)){
//     echo fgetc($file)."<br>";
// }
// fclose($file);
?> 

<?php
// function sum(...$numbers) {
//     return array_sum($numbers);
// }

// // Test cases
// echo sum(10); // Output: 10
// echo sum(10, 20); // Output: 30
// echo sum(10, 20, 30); // Output: 60
?>
<?php
// $mda=array(
//     array("name","age","address"),
//     array("pedro","40","US"),
//     array("Larry","3","germany"),
//     array("hasbulla","18","africa"),
//     array("khan","30","china")
// );
// echo "<table border='1'>";
// foreach($mda as $a){
//     echo "<tr>";
//     foreach ($a as $b){
//         echo "<td>$b</td>";
//     }
//     echo "</tr>";
// }
//  echo "</table>";
?>
<?php
// function sum(...$num){
//     return array_sum($num);
// }
//     echo sum(10)."<br>";
//     echo sum(10,20)."<br>";
//     echo sum(10,20,30);
?>        
<?php
// $file = fopen("file1.txt", "r");
// $vowels = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'];
// $arr = array();
// while (!feof($file)) {
//     $char = fgetc($file);
//     if (in_array($char, $vowels)) {
//         $arr[] = $char;
//     }
// }
// //echo "<pre>";
// print_r($arr);
// //echo "</pre>";
// fclose($file);
?>  
<html>
    <head></head>
    <body> 
<?php
if(isset($_POST['submit'])){
$target_dir="uploads/";
$name=$target_dir.basename($_FILES["myfile"]["name"]);
$uploadOk=1;
$tmp_name=$_FILES["myfile"]["tmp_name"];
$FileType=strtolower(pathinfo($name,PATHINFO_EXTENSION));

if(file_exists($name)){
    echo "file already exists";
}
if($_FILES["myfile"]["size"]>5000000000){
    echo "file is too large";
}
if($FileType!="jpg"||$FileType!="jpeg"||$FileType!="pdf"){
   echo "file type not valid";
}
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$name)){
    echo "file uploaded succesfully";
}
}
?>
<form method="post" enctype="multipart/form-data">
    select a file:
    <input type="file" name="myfile">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

             