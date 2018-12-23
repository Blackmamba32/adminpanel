<?php

// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $uname=$_POST['username'];
    $upass=$_POST['password'];
    $email=$_POST['email'];    
    
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
    } else {    
        //updating the table
        $stm = mysqli_query($conn, "UPDATE login SET username='$uname',password='$upass',email='$email' WHERE id=$id");
        
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
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="viewuse.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>userName</td>
                <td><input type="text" name="username" value="<?php echo $uname;?>"></td>
            </tr>
            <tr> 
                <td>password</td>
                <td><input type="text" name="password" value="<?php echo $upass;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>