<?php
header('Content-Type:text/html;charset=UTF-8');
$fp=fopen("php://inpput",rb);
while(!feof($fp))
    $data .= fread($fp,4096);
fclose($fp);
$doc=new DOMDocument();
$doc->loadXML($data);
$root=$doc->getElementsByTagName("members");
$root = $root->item(0);
$userid = $root->getElementsByTagName("member");
foreach($userid as $rootdata)
{
    echo $rootdata->nodeValue;
    echo "<p>";
}
?>
