<?php
$file="test.txt";
if(false==($fp=fopen($file,"rb")))
    echo "open error";
if($fp){
    while(false!==($line=fgets($fp)))
        echo $line."</br>";
}
?>
