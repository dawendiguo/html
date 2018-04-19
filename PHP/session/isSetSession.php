<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>判断是否设置session </title>
</head>
<body>
<?php
session_start();
$_SESSION["username"]="dawen"; 
$_SESSION["password"]="123456";
if(isset($_SESSION["username"]))
    echo "username 已经注册为 Session";
echo "<p>";
if(isset($_SESSION["password"]))
    echo "password 已经注册为 Session";
?>
</body>
</html>
