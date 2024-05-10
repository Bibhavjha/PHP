<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <td rowspan="2">S.no</td>
                <td rowspan="2">name</td>
                <td rowspan="2">place</td>
                <td colspan="2">time</td>
                <td rowspan="2">Amount</td>
            </tr>
            <tr>
                <td>arrival</td>
                <td>departure</td>
            </tr> 
<?php
$arr =array(
    array(1,"Ram","New Road","7.30","8.45",25),
    array(2,"sita","gaushala","6.30","9.30",30)
);
foreach($arr as $v){
    echo "<tr>";
    foreach($v as $m){
        echo "<td>$m</td>";
    }
    echo "</tr>";
}



?>