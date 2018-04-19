<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注销session</title>
</head>
<body>
<?php
session_start();
$_SESSION["username"]="dawendiguo";
$_SESSION["password"]="123456";
$_SESSION["photo"]="1.jpg";
echo "current sessions :";
echo "<pre>";
print_r($_SESSION);
echo "</pre>\n";
unset($_SESSION["password"]);
echo "<p>\n";
echo "current session :";
echo "<pre>";
print_r($_SESSION);
echo "</pre>\n";
unset($_SESSION);
echo "<p>";
echo "current session:";
echo "<pre>";
print_r($_SESSION);
echo "</pre>\n";
?>
</body>
</html>
