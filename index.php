<?php
session_start();
if(isset($_POST['login']))
{
    $user=$_POST['uname'];
    $pass=$_POST['upass'];
//making statement
$stm="SELECT * FROM login WHERE username='$user' AND password='$pass' ";
//Making connection
include('connection.php');
//making query
$qr=mysqli_query($conn, $stm);
//counting the no of record affected by this query
$count=mysqli_num_rows($qr);
if($count==1)
{ 
    $_SESSION['lgid']=md5(rand(1,9999));
    $_SESSION['username']=$user;
    $_SESSION['logintime']=time();
    
    header('Location: dashboard.php');}
else{echo "Login Failed";}

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="post" name="frmLogin" action="" enctype="multipart/form-data">
<fieldset>
    <legend>
    Login
    </legend>
    <input type="text" name='uname' placeholder="Username" /><br/>
    <input type="password" name="upass" placeholder="Password" /><br/>
    <input type="submit" name="login" value="Login" />
</fieldset>
</form>
    
</body>
</html>