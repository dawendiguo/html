<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php in Html</title>
</head>
<body>
    <?php
          if(!isset($_POST['register'])||($_POST['register'] != 'Register'))
          {
     ?>
        <h1>Registration</h1>
        <form action="register.php" method="post"> 
        <table>
            <tr>
                <td>Email address:</td>
                <td><input type="text" name='email'/></td>
            </tr>
            <tr>
                <td>First name:</td>
                <td><input type="text" name="first name" /></td>
            </tr>
            <tr>
                <td>last name:</td>
                <td><input type="text" name="last_name" /></td>
            </tr>
                <tr>
                    <td>Passwd:</td>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td colspan='2'> <input type="submit" name='register' value='Register'/></td>
                </tr>
        </table></form>
        <?php
            }
            else{
        ?>
           E-mail:<?php
           echo $_POST['email'];?><br/>
           Name:<?php echo $_POST['first_name']. ' '.$_POST['last_name'];
           ?><br/>
           Password:<?php echo $_POST['password'];?><br/>
           <?php } ?>
</body>
</html>
