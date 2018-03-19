<?php
$file="test.txt";
if(false==($fp=fopen($file,"rb")))
    echo $file."open error";
if($fp){
    while(false!==($char=fgetc($fp)))
        print($char);
}
?>
