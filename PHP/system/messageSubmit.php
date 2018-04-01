<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>message submit page</title>
<script type="text/javascript">
function c_img(){
    document.img.src="img/"+document.f.face.value;
}
function go(form){
    if(form.username.value=="")
    {
        alert("please input message author");
        form.username.focus();
        return (false);
    }
    if(form.content.value==""){
        alert("please input message content");
        form.content.focus();
        return (false);
    }
}
</script>
</head>
<body>
    <center>
<font size="5">get new massage</font>
<p>
<a href="messageDisplay.php">main page</a>
</p>
<p>
<table border="1" bordercolor='blue' width='80%'>
<form action='messageBack.php' method='post' onsubmit='return go(this);'>
    <tr>
        <td width='40%'>
<font color='#ff0000'>*</font>author name</td>
<td><input type="text" name='username' size='30'/></td>
    </tr>
<tr>
    <td>message title</td>
<td><input type="text" name='title' size='30'></td>
</tr>
<tr>
    <td>message  face</td>
<td><select id="face" name="face" size='1' onchange=c_img()>
    <option value="1.gif">fiveStart</option>
    <option value="2.gif">fourStart</option>
    <option value="3.gif">moon</option>
    <option value="4.gif">fallArc</option>
    <option value="5.gif">flash</option>
    <option value="6.gif">smallFace</option>
    <option value="7.gif">love</option>
    <option value="8.gif">eightStart</option>
    <option value="9.gif">clouds</option>
    <option value="10.gif">sun</option>
    <option value="11.gif">arc</option>
    <option value="12.gif">fallFace</option>
</select></td>
</tr>
<tr>
    <td> <font color='#ff0000'>message</font></td>
<td>
<textarea id="content" name="content" cols="40" rows="10"></textarea></td>
</tr>
<tr>
    <td>submit:</td>
<td><input type="submit" value="submit"></td>
</tr>
</form>
</table></p>
</center>
</body>
</html>
