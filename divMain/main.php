<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dawen's main page</title>
    <link rel="stylesheet" href="css.css" type="text/css">
    <script type="text/javascript" src="../jquery.js"></script>
</head>
<body>
   <div class="header"><center><h2>Dawendiguo</h2></center></div>
<div class="box">
   <div class="menu">
<?php
include "menu.php";
?></div>
    <div class="mid">
    <div class="content"><?php include 'Introduce/main.php'; ?></div>
    <div class="link"><?php include "link.php"; ?></div>
<script>
$('input').click(
    function($e){
        $('input.selected').removeClass('selected');
        $(this).addClass("selected");
        $('.content').load($(this).val());
    }
)
    </script>
</div>
</div>
   <div class="bottom"><i>suported by dawen</i></div>
</body>
</html>
