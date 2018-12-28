    
<?php
include('inc_session.php');?>
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $uname=$_POST['username'];
    $upass=$_POST['password'];
    $email=$_POST['email'];  
    $role=$_POST['role'];
    
    // checking empty fields
    if(empty($uname) || empty($upass) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>userName field is empty.</font><br/>";
        }
        
        if(empty($upass)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }    
        if (empty($role)){
            "<font color='red'>role field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $stm = mysqli_query($conn, "UPDATE login SET username='$uname',password='$upass',email='$email', role=$role WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: viewusers.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$stm= mysqli_query($conn, "SELECT * FROM login WHERE id=$id");
 
while($row = mysqli_fetch_array($stm))
{
    $uname = $row['username'];
    $upass = $row['password'];
    $email = $row['email'];
    $role= $row['role'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('inc_headsection.php');?>
    <link href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
     <button class="btn btn-success"  ><a href="viewusers.php" style=" text-decoration: none;color:white;">&lt;&lt;view Users</a></button>
    <br/><br/>
    <form name="form1" method="post" action="edit.php" class="form-group">
        <table border="0">
            <tr> 
                <td>userName</td>
                <td><input class="form-control" type="text" name="username" value="<?php echo $uname;?>"></td>
            </tr>
            <tr> 
                <td>password</td>
                <td><input class="form-control" type="text" name="password" value="<?php echo $upass;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><div class="checkbox"><input type="radio" name="role" value="1"> Admin</div>
                         
                        <div class="checkbox"><input type="radio" name="role" value="2" > User</div></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="form-control btn btn-primary"type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
 </div>
               



            


            </div>
            <!-- /.row -->
      
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('inc_footerscript.php');?>
   
     
       

    
</body>

</html>