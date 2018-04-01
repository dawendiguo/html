<?php
echo "<center>\n
<font size=\"5\">Message display</font>\n
<p>\n";
$file="data.txt";
$msg=file($file);
$msg_count=count($msg);
echo "current hava ".$msg_count." messages.";
echo "</p>\n";
echo " <a href=\"messageSubmit.php\">Get new messages</a>\n";
echo "<p>\n";
if($msg_count==0){
    echo "No messages\n";
}
else{
    echo " <table border=\"1\">\n
    <tr>\n
        <td>ID</td>\n
        <td>author</td>\n
        <td>title</td>\n
        <td>message time</td>\n
        <td>content</td>\n
    </tr>\n";
    for($i=1;$i<$msg_count+1;$i++){
        $msg_info=explode(";",$msg[$i-1]);
        echo " <tr>\n
    <td>".($msg_count-$i)."</td>\n";
        echo " <td>".$msg_info[0]."</td>\n";
        echo " <td>".$msg_info[1]."</td>\n";
        echo " <td>".$msg_info[2]."</td>\n";
        echo " <td> <img src=\"img\\".$msg_info[3]."\"></td>\n";
        echo " <td>".$msg_info[4]."</td>\n";
        echo "</tr>\n";
    }
echo "</table>\n";
}
echo "</center>\n";
?>
