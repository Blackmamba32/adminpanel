<?php
include('inc_session.php');?>
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $cid = $_POST['category_id'];
    
    $cname=$_POST['category_name'];
        
    
    // checking empty fields
          
        if(empty($cname)) {
            echo "<font color='red'>category name field is empty.</font><br/>";
            
    }
         else {    
        //updating the table
        $stm = mysqli_query($conn, "UPDATE category SET category_name='$cname' WHERE category_id=$cid");
        
        /*redirectig to the display page. In our case, it is viewcategory.php*/
        header("Location: viewcategory.php");
    }
}
?>
<?php
//getting id from url
$cid = $_GET['cid'];
 
//selecting data associated with this particular id
$stm= mysqli_query($conn, "SELECT * FROM category WHERE category_id=$cid");
 
while($row = mysqli_fetch_array($stm))
{
    $cname = $row['category_name'];
   
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
    <a href="viewcategory.php" class="btn btn-success" style=" text-decoration: none;color:white;">&lt;&lt;view Users</a>
    <form class="form-group" name="form1" method="post" action="category_edit.php">
        <table border="0">
            <tr> 
                <td ><label >Category Name</label></td>
                <td><input class="form-control" type="text" name="category_name" value="<?php echo $cname;?>"></td>
            </tr>
            
            <tr>
                <td><input class="form-control" type="hidden" name="category_id" value=<?php echo $_GET['cid'];?>></td>
                <td><input class="form-control btn btn-primary" type="submit" name="update" value="Update"></td>
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