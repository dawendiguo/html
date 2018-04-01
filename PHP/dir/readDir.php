<?php
$dir_name=".";
if($dir_h=opendir($dir_name))
    echo "打开目录成功";
echo " <P>";
echo "目录".$dir_name."中的内容为";
echo " <P>";
echo "<table>";
echo "<tr>";
echo " <td>文件名</td> ";
echo " <td>文件大小</td> ";
echo " <td>文件类型</td> ";
echo " <td>文件修改时间</td> ";
echo "</tr>";
while(false!==($file=readdir($dir_h))){
    echo "<tr>";
    echo " <td>".$file."</td>";
    echo " <td>".filesize($file)."</td>";
    echo " <td>".filetype($file)."</td>";
    //echo " <td>". date("Y年n月t日",$filemtime($file))."</td>";
    echo "</tr>";
}
echo "</table>";
?>
