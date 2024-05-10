<?php
$target_dir="downlaods/";
$target_file=$target_dir.basename($_FILES["fileuplaod"]["name"]);
$uploadok=1;
$pdfFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    if($pdfFileType!="pdf"){
        echo "only supports pdf file";
        $uploadok=0;
    }
    if($uplaodok==0){
        echo "file isnt uplaoded";
    }else{
        if(move_uploaded_file($_FILES["fileupload"],["tmp_name"],$target_file)){
            echo "sucess";
        }else{
            echo "file not uplaoded";
        }
    }
}