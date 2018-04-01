<?php
if(!$_GET[delfile]){
    $dir_name=".";
    $result=scandir($dir_name);
    echo "<script language=\"javascript\">\n
        function conf(text)\n{
        if(confirm(\"you sure delete\"+text+\"?\"))\n
        return ture\n;
        else
        return false;
        }\n";
    echo  "</script>\n";
    echo     "<font size=\"9pt\">
        Simple file system
        </font>\n
        <p>\n";
    $file_num=count($result);
    echo "Current file hava".($file_num-2)." files\n
        <p>\n
        <table border=\"1\">\n
            <tr>\n
            <td>fileName</td>\n
            <td>fileSize</td>\n
            <td>fileType</td>\n
            <td>delete</td>\n
            </tr>\n";
     for($i=0;$i<$file_num;$i++)
     {
         $file=$result[$i];
         if($file!="."&&$file!=".."){
             echo "<tr>\n";
             echo "<td>".$file."</td>\n";
             echo "<td>".filesize($file)."</td>\n";
             echo "<td>".filetype($file)."</td>\n";
             echo "<td>";
             echo "<a href=\"".$_SERVER["PHP_SELF"]."?delfile=".$file."\" onclick=\" return  conf('".$file."')\">delete</a>";
             echo "</td>\n";
             echo "</tr>\n";
        }
     }
             echo "</table>\n";
}
else{
    $action=unlink($_GET[delfile]);
    if($action){
        echo "<meta http-equiv=\"refresh\" content=\"2; url=fileSystem.php\">";
        echo "successful delete file".$_GET[delfile];
        echo "<p>";
        echo "two seconds return";
    }
    else
    {
        echo "<meta http-equiv=\"refresh\" content=\"2; url=fileSystem.php\">";
        echo "delete file ".$_GET[delfile]." error";
        echo "<p>";
        echo "two seconds return";
    }
}
?>


