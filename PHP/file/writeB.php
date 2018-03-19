<?php
$file = "writeFile.txt";
if(false==($fp=fopen($file,"w")))
    echo "Open".$file."error";
$writeW="This is write by fwrite mod W <br/ >";
$writeR="This is write by fwrite mod R+<br/>";
$writeA="This is write By fwrite mod A<br/>";
$writeX="This is write by fwrite mod x<br/>";
$w_1=fwrite($fp,$writeW);
fclose($fp);
output($file);
if(false!==($fp=fopen($file,"r+"))){
    $w_2=fwrite($fp,$writeR);
    fclose($fp);
}
output($file);
if(false!==($fp=fopen($file,"a+"))){
    $w_3=fwrite($fp,$writeA);
    fclose($fp);
}
output($file);
function output($file){
    $str = file_get_contents($file);
    echo $str;
}
?>
