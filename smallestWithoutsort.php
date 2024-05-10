<?php
$a=array(90,10,11,8,5,98);
$min=$a[0];
for($i=0;$i<sizeof($a);$i++){
    if($a[$i]<$min){
        $min=$a[$i];
    }
}
echo $min;
?>
