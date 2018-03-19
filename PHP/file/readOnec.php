<?php
$file="test.txt";
echo "file".$file."content:";
echo "<p>";
$result=file($file);
for($i=0;$i<count($result);$i++){
    $j=$i+1;
    echo $file."line ".$j." content:";
    echo $result[$i];
    echo "<p>";
}
?>
