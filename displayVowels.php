<!-- Write a program in PHP that reads a file and displays vowels only -->
<?php
$file=fopen("file1.txt","r");
$content= fgets($file);
$contentLower=strtolower($content);
while(!feof($file)){
if($contentLower='a'||$contentLower='e'||$contentLower='i'||$contentLower='o'||$contentLower='u')
echo fgets($file);
}
fclose($file);
?>