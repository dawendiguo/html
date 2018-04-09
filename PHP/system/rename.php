<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> rename select file</title>
</head>
<body>
<center>
<?php
    if(!$_GET[re_n]){
        echo "<meta http-couiv=\"refresh\" content=\"2, url=readFile.php\">\n";
        echo "not hava select file";
        echo "<p>";
        echo "two seconds return";
        exit();
    }
    else{
        if(!$_GET[new_name]){
            echo "<script src=\"rename.js\" type=\"text/javascript\">\n</script>\n";
?>
<font size="5" color='#ff0000'>
file rename interface
</font>
<p>
<a href="readFile.php">return main</a></p>
<p>
<table border="1">
<?php echo "<form action=\"".$_SERVER[PHP_SELF]."\" onsubmit=\"return go(this)\" methord=\"get\">\n"; ?>
    <tr>
        <td colspan="2" align="center"><?php echo "file ".$_GET[re_n]." rename"; ?></td>
    </tr>
    <tr>
        <td>new filename and spanname</td>
        <td>
        <input type="hidden" name="re_n" value="<?php echo $_GET[re_n]; ?>">
        <input type="text" name="new_name">
</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="button" value="pre" onclick=history.go(-1)>
        <input type="submit" value="next"></td>
    </tr>
</form>
</table>
<?php
        }
        else{
            $old_name="upload/".$_GET[re_n];
            $new_name="upload/".$_GET[new_name];
            while(file_exists($new_name)){
                $temp=explode(".",$new_name);
                $temp[0]=$temp[0]."[0]";
                for($i=0;$i<count($temp);$i++){
                    if($i>0)
                        $temp[$i]=".".$temp[$i];
                    $result=$rename.$temp[$i];
                }
                $new_name=$result;
            }
            if(rename($old_name,$new_name)){
                echo "<meta http-equiv=\"refresh\" content=\"2; url=readFile.php\">\n";
                echo "file ".old_name." rename ".$new_name." successful";
                echo "<p>";
                echo "two seconds return";
            }
            else{
                echo "<meta http-equiv=\"refresh\" content=\"2; url=readFile.php\">\n";
                echo "file ".old_name." rename ".$new_name." fail";
                echo "<p>";
                echo "two seconds return";
            }

        }
    }
?>
</p>
</center>
</body>
</html>
