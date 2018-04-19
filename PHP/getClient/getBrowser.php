<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get browser</title>
</head>
<body>
<?php
    echo $_SERVER["HTTP_USER_AGENT"];
    echo "3<p>";
    $browser=get_browser(null,true);
    echo "<pre>";
    print_r($browser);
    echo "</pre>";
?>
</body>
</html>
