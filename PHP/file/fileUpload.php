<?php
echo "<html>";
echo "<head>";
echo "<title> file uploading page </title>";
echo "</head>";
echo "<body>";
    if(!$_POST["upfile"]&&$_FILES["upfile"]["name"]==""){
        echo "No files select";
        echo "<p>";
        echo "<a href=\"fileUpload.html\">this</a> back";
    }
    else{
        $filepath="temp/";
        $name=$filepath.$_FILES["upfile"]["name"];
        if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$name)){
            echo "File ".$_FILES["upfile"]["name"];
            echo "<p>";
            echo "upload successful";
            echo "click <a href=\"fileUpload.html\"> here </a> back";
        }
        else{
            echo "file upload error";
            echo "<p>";
            echo "file upload faile";
            echo "<p>";
            echo "click <a href=\"fileUpload.html\"> here </a> back";
        }
    }
echo "</body>";
echo "</html>";
?>
