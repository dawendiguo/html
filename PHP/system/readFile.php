<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File system interface</title>
</head>
<body>
    <center>
    <font size="5">File System interface</font>
    <p>
    <a href="upload.php">Upload file</a></p>
<?php
    $dir_name="upload";
    $result=scandir($dir_name);
    $file_num=count($result);
    echo "<p>";
    echo "current directory hava ".($file_num-2)." files";
    if($file_num-2>0){
        echo "<script src=\"readFile.js\" type=\"text/javascript\">";
        echo "</script>\n";
?>
<table border="1">
    <form  name="f" method="post" action="delete.php" onsubmit="return conf(this)">
    <tr>
        <td>select</td>
        <td>fileName</td>
        <td>fileSize</td>
        <td>fileType</td>
<td>rename</td>
<td>open</td>
</tr>
<?php
        for($i=0;$i<$file_num;$i++){
            if($result[$i]!="."&&$result[$i]!=".."){
                $file=$dir_name."/".$result[$i];
                echo "<tr>";
                echo "<td><input type=\"checkbox\" name=\"delf[]\" value=\"".$file."\"></td>\n";
                echo "<td>".$result[$i];"</td>\n";
                echo "<td>".filesize($file)."</td>\n";
                echo "<td>".filetype($file)."</td>\n";
                echo "<td>";
                echo "<a href=\"rename.php?re_n=".$result[$i]."\">rename</a>";
                echo "</td>\n";
                echo "<td>";
                echo "<a href=\"".$file."\" target=\"_blank\">open</a>";
                echo "</td>\n";
                echo "</tr>\n";
            }
        }
?>
<tr>
    <td colspan="6" align="center">All
    <input type="checkbox" name="all" onclick="change()">
    <input type="submit" value="delete">
</td>
</tr>
</form>
</table>
<?php
    }
?>
</center>
    
</body>
</html>
