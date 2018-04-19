<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>获取session 保存路径</title>
</head>
<body>
<?php
$path=session_save_path();
if($path=="")
    $path="no set";
echo "current session save path;";
echo "<p>\n";
echo $path;
echo "<p>\n";
$new_path="temp";
session_save_path($new_path);
$result=session_save_path();
echo "now sessiob save path:";
echo "<p>\n";
echo $result;
?>
</body>
</html>
