<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $role=$_POST['role'];
//making statement
$stmt="INSERT INTO login(username, password, email, role, status) VALUES ('$username', '$password', '$email', $role, 0)";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
//giving the message
if($qry)
{ echo "User Registered";}
else {echo "Somthing wrong while register the user";}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="post" action="" name="frmRegister" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username"><br/>
    <input type="password" name="password" placeholder="Password"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
    <input type="radio" name="role" value="1"> Admin
    <input type="radio" name="role" value="2" checked> User<br/>
    <input type="submit" name="submit" value="Register"><br/>
</form>
    
</body>
</html