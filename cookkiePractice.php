<?php
setcookie("username","ravi teja",time()+2592000,"/","",0);
setcookie("password","**45tv12",time()+2592000,"/","",0);
echo "set cookies"."<br>";
echo $_COOKIE['username']."<br>";
echo $_COOKIE['password']."<br>";
?>