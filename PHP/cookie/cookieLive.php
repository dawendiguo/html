<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cookie live</title>
</head>
<?php if(!$_POST["username"]){ ?>
<body topmargin="100">
<center>
<table border="1">
    <form method="post" action="cookieLive.php">
    <tr>
        <td colspan="2" color="red">为cookie设置生命周期</td>
    </tr>
<tr>
    <td>用户名称:</td>
<td><input type="text" name="username"/></td>
</tr>
<tr>
    <td>保存期限:</td>
    <td>
    <select id="time" name="time" size="1">
            <option value="1">不保存</option>
            <option value="2">保存一天</option>
            <option value="3">保存一月</option>
            <option value="4">保存一年</option>
    </select></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="确定"/></td>
</tr>
</form>
</table>
</center>
<?php }
else{
    $time=$_POST["time"];
    $username=$_POST["username"];
    switch($time){
    case 1:
        $time=0;
        break;
    case 2:
        $time=60*60*24;
        break;
    case 3:
        $time=60*60*24*31;
        break;
    case 4:
        $time=60*60*24*365;
        break;
    }

    if(setcookie("username","$username",$time)){
        echo "注册cookie成功";
        echo "<p>注册用户名为:".$username;
        echo "<p>有效期为:";
        switch($_POST["time"]){
        case 1:
            echo "不保存";
            break;
        case 2:
            echo "保存一天";
            break;
        case 3:
            echo "保存一月";
            break;
        case 4:
            echo "保存一年";
            break;
        }
    }
    else
        echo "注册出错";
}
?>
</body>
</html>
