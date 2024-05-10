<?php
session_start();
$_SESSION['firstname']="chandramukhi";
$_SESSION['lastname']="gupta";
//echo "data stored in session";
if(isset($_SESSION['firstname'])){
    echo $_SESSION['firstname']."<br>";
}
if(isset($_SESSION['lastname'])){
    echo $_SESSION['lastname'];
}

?>