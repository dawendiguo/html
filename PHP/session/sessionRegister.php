<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session register</title>
</head>
<body>
<?php
    session_start();
    $userName="dawen";
    $userSex="male";
    $userAge="60";
    $userAddr="chengdu,china";
    $action=false;

    $_SESSION["username"]=$userName;
    $_SESSION["userage"]=$userAge;
    $_SESSION["usersex"]=$userSex;
    $_SESSION["useraddr"]=$userAddr;
    if($_SESSION["username"])
        $action=true;
    if($action)
        echo "session register successful";
    else
        echo "sessiOn register false";
    print_r($_SESSION);
?>
</body>
</html>
