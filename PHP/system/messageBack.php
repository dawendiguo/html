<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>message back</title>
</head>
<body>
<?php
if(!$_POST[username]||!$_POST[content]){
    echo "<meta http-equiv=\"refresh\" content=\"2, messageSubmit.php\">\n";
    echo "you donot text username or content!\n";
    echo "<p>\n";
    echo "two seconds later submit page\n";
    exit();
}
else{
    $username=$_POST[username];
    $content=preg_replace("{\r\n}","<br>",$_POST[content]);
    $face=$_POST[face];
    if($_POST[title])
        $title=$_POST[title];
    else
        $title="none";
    $time=date(Y年m月d日H时i分);
    $r1=$username.";".$title.";".$time.";".$face.";".$content."\n";

    $r2=file_get_contents("data.txt");
    $fp=fopen("data.txt","r+b");
    $do=fwrite($fp,$r1.$r2);
    fclose($fp);
    if($do){
        echo "<meta http-equiv=\"refresh\" content=\"2; url=messageDisplay.php\">\n";
        echo "submit message successful";
        echo "<p>\n";
        echo "two seconds return \n";
    }
}
?>
</body>
</html>
