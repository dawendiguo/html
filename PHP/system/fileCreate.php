<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File System interface</title>
</head>
<body>
   <center>
<?php
    $dir_name="upload";
    $result=scandir($dir_name);
    echo "<font size=5 color=\"#ff0000\">\n";
    echo "File System Interface\n";
    echo "</font>\n";
    echo "<p>\n";
    $file_num=count($result);;
    echo "current hava ".$(file_num)-2." files\n";
    echo "<p>\n";
    echo "<a href=\"uploadFile.php\">upload file\n</a>";
    echo "<p>\n";
    if($file_num-2>0){
        echo " <script type=\"text/javascript\" src=\"js/removeFile.js\"> \n
             </script>";
        echo "<table border=\"1\">\n";
            echo "<form action=\"
}
</center>
</body>
</html>
