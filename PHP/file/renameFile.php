<?php
$file1="testCopy.txt";
$file2="testRename.txt";
$action=rename($file1,$file2);
if($action)
    echo "rename ".$file1." successful";
else
    echo "rename ".$file1." failed";
?>
