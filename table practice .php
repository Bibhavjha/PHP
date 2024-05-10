<!-- wap in php to display following tablw where value of table are stored in multidimensinal array
s.n.    name          batch
1       noyal          bca
2       anjali         bbm
3       aryan          bim
4       abhinash       bim -->
<?php
$info= array(
    array(1,2,3,4),
    array("noyal","anjali","aryan","abhinash"),
    array("BCA","BBM","BIM","bim")
);
echo "<table border='1'>";
echo "<th>"S.N."<th>";
echo "<tr>"
?>