<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File system delete interface</title>
</head>
<body>
<?php
    if(!$_POST[delf]){
        echo "<meta http-equiv=\"refresh\" conten=\"2,readFile.php\">\n";
        echo "hava no select file to delete\n";
        echo "<p>";
        echo "two seconds return \n";
    }
    else{
        $del_f_a=$_POST[delf];
        for($i=0;$i<count(del_f_a);$i++){
            unlink($del_f_a[$i]);
        }
        echo "<meta http-equiv=\"refresh\" content=\"2,readFile.php\">\n";
        echo "already delete select file";
        echo "<p>";
        echo "two seconds return \n";
    }
?>
</body>
</html>
