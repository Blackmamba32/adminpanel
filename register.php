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
$stmt="INSERT INTO login(username, password, email, role, status) VALUES ('$username', '$password', '$email', $role, 1)";
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
<?php include('inc_headsection.php');?>

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
    <div class="container">
 <form class="form-horizontal" method="post" action="#">
                        
                        
                        <div class="form-group ">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>
                           <div class="checkbox"><input type="radio" name="role" value="1"> Admin</div>
                         
                        <div class="checkbox"><input type="radio" name="role" value="2" checked> User</div>

                        

                        <div class="form-group ">
                            <input type="submit" name="submit" value="Register" class="btn btn-primary">
                        </div>
                        <div class="login-register">
                            <a href="index.php" class="btn btn-success">Login</a>
                         </div>
                    </form>

</div>

                     
</body>
</html