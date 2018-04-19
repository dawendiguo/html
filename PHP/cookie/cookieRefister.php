<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cookie register use</title>
</head>
<body>
<?php
    $user_id="123456";
    $user_name="guest";
    $user_pass="123456";
    $user_sex="male";
    $flag=false;
    if(setcookie("user_id",$user_id)){
        if(setcookie("user_name",$user_name)){
            if(setcookie("user_pass",$user_pass)){
                if(setcookie("user_sex",$user_sex)){
                    $flag=true;
                    }
                }
        }
    }
?>
<?php
    if($flag){
        echo "指定变量注册成功";
        echo "<p>";
        echo "当前所有cookie为:";
        reset($_COOKIE);
        echo "<p>";
        while(list($key,$val)=each($_COOKIE))
        {
            echo "$key=>$val";
            echo "<p>";
        }
    }
?>
</body>
</html>
