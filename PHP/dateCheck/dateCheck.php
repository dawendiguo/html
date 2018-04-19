<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>date check</title>
</head>
<body>
    <?php
$date1="1999-14-12";
$date2="2008-2-29";
$date3="2007-2-29";
function CN_dateCheck($date){
    $r=explode("-",$date);
    $y=$r[0];
    $m=$r[1];
    $d=$r[2];
    if(checkdate($m,$d,$y))
    {
        return $y."年".$m."月".$d."日,是合法日期";
    }
    else
    {
        return $y."年".$m."月".$d."日,是非法日期";
    }
}

echo CN_dateCheck($date1);
echo "<p>\n";
echo CN_dateCheck($date2);
echo "<p>\n";
echo CN_dateCheck($date3);
?>
</body>
</html>
