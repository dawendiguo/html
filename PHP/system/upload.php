<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File system upload interface</title>
</head>
<body>
   <center>
<?php if(!$_POST["upfile"]&&$_FILES[upfile][name]==""){ ?>
<font size="5">file system upload interface</font>
<p><a href="readFile.php">return main page</a></p>
<p>
<table border="1">
    <form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post" ENCTYPE="multipart/form-data">
    <tr>
        <td>select file</td>
<td><input type="file" name="upfile"></td>
    </tr>
<tr>
    <td clospan="2">
<center>
<input type="button" value="pre" onclick="history.go(-1)">
<input type="submit" value="next"></center></td>
</tr>
</form>
</table></p>
<?php
}
else{
    $filePath="upload/";
    $name=$filePath.$_FILES["upfile"]["name"];
    while(file_exists($name)){
        $temp = explode(".",$name);
        $temp[0] = $temp[0]."[0]";
        for($i = 0;$i<count($temp);$i++){
            if($i>0)
                $temp[$i]=".".$temp[$i];
            $result=$result.$temp[$i];
        }
        $name=$result;
    }
    if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$name)){
        echo "<meta http-equiv=\"refresh\" content=\"2,url=".$_SERVER[PHP_SELF]."\">\n";
        echo "file ".$_FILES["upfile"]["name"];
        echo "<p>";
        echo "upload successful";
        echo "<p>";
        echo "two seconds return ";
    }
    else{
        echo "<meta http-equiv=\"refresh\" content=\"2,url=".$_SERVER[PHP_SELF]."\">\n";
        echo "file ".$_FILES["upfile"]["name"];
        echo "<p>";
        echo "upload faile";
        echo "<p>";
        echo "two second return ";
    }
}
?>
</center>
</body>
</html>
