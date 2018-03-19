<?php
if(file_exists(test))
    if(opendir(test))
        echo "打开test";
    else
        echo "打开test失败";
else
    echo "文件夹test不存在";
?>
