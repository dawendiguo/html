<?php
$file1="openFile.php";  
$file2="test.txt";
$fp=fopen($file1,"r");
if($fp)
    echo $file1."打开成功";
else
    echo $file1."打开失败";
echo "<p>";
$fp2=fopen($file2,"wb");
if($fp2)
    echo $file2."打开成功.";
else
    echo $file2."打开失败.";
?>
