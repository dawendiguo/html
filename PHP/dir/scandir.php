<?php
$dir_name=".";
$result1=scandir($dir_name);
$result2=scandir($dir_name,1);
echo "<pre>";
print_r($result1);
echo"<p>";
echo "<pre>";
print_r($result2);
echo "</p>";
echo "</pre>";
?>
