<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>获取cookie</title>
</head>
<body>
<?php
    $user_id="123456";
    $user_name="guest";
    $user_pass="123456";
    $user_sex="male";
    setcookie("user_id",$user_name);
    setcookie("user_name",$user_name);
    setcookie("user_pass",$user_pass);
    setcookie("user_sex",$user_sex);
?>
<?php
    echo "注册id:".$_COOKIE["user_id"];
    echo "<p>";
    echo "注册用户名".$_COOKIE["user_name"];
    echo "<p>";
    echo "注册密码:".$_COOKIE["user_pass"];
    echo "<p>";
    echo "注册性别:".$_COOKIE["user_sex"];
?>
</body>
</html>
