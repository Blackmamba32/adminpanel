<?php
session_start();
if(isset($_POST['login']))
{
    $user=$_POST['uname'];
    $pass=$_POST['upass'];
//making statement
$stm="SELECT * FROM login WHERE username='$user' AND password='$pass' AND status= 1";
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
else{
  echo '<div class="alert alert-danger">';
  echo '<strong>Login Failed!</strong> Try again.';
  echo '</div>';

     
}

}
?>

 <?php include('inc_headsection.php');?>
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
<body  class="img-responsive">
    <div class="container">
    <div class="login-form ">
        <form method="post" name="frmLogin" action="" enctype="multipart/form-data">
<fieldset>
    <legend>
   <h1 class="text-center " > Sign in</h1>     
    </legend>
     <div class="form-group">
            <input type="text" name="uname" class="form-control"  placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="upass" class="form-control"  placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Log in</button>
        </div>
</fieldset>
                            <div class="login-register">
                            <a href="register.php" class="btn btn-danger">-SignUp-</a>
                         </div>
</form>
                       

    </div>
</div>
    
</body>
</html>