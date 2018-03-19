<?php
$file="fileTemp";
$fp=fopen($file,"x");
//fwrite($fp,"This file is Write by mod x.intention this file must is not exsists .if it is exsists fopen mod x can't open it";
fclose($fp);
?>
