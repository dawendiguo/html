<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css.css" type="text/css"/>
    <script type = 'text/javascript' src='../../includeJS/jquery.js'></script>
    <script type = 'text/javascript' src='js.js'></script>
</head>
<body>
    <h2>我的书籍</h2>
    <center>
    <table border="1">

<?php
include "./books/booksClass.php";
function listFile($dir){
    if(is_dir($dir)){
        if($dh=opendir($dir)){
            while(($file=readdir($dh))!==false)
            {
                if((is_dir($dir."/".$file))&&$file!="."&&$file!="..")
                {
                    $path=$dir."/".$file;
                    listFile($path);
                }
                else{
                    if($file!="."&&$file!=".."){
                    $path=$dir."/".$file;
                    $currentBook=new Book($path);
                    $currentBook->DisplayTable();
        }}
            }
        }
        closedir($dh);
        }
    }
listFile("books");
?>
</table>
</center>
<P>
    <div class=links>
        <a href="MainTarget.html" class='links'>MainPage</a>
        <a href="Introduce.html" class='links'> Introduce</a>
        <a class="links" href="Tools.html">Tools</a>
        <a class="links" href="Games.html">Games</a>
         <a href="JAVA.html" class='links'>JAVA application</a>
         <a href="LinuxApp.html" class='links'>Linux App</a>
         <a href="HTML5.html" class='links'>HTML5</a>
    </div>
</body>
</html>
