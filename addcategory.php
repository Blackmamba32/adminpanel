<?php
include('inc_session.php');
?>
<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
    $cname=$_POST['category_name'];


//making statement
$stmt="INSERT INTO category(category_name,category_status) VALUES ('$cname', 1)";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
//giving the message
if($qry)
{ 
echo '<div class="alert alert-success">';
echo '<strong>Category Added!</strong>';
echo '</div>';
  
}
else {echo "Somthing wrong while adding new category";}

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
                    <h1 class="page-header">New Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
             <form class="form-horizontal" method="post" action="#">
                        
                        
                        <div class="form-group">
                            <label for="categoroy_name" class="cols-sm-2 control-label">Category name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="category_name" id="category_name"  placeholder="Enter category name"/>
                                </div>
                            </div>
                        </div>
                       

                        

                       

                        

                        <div class="form-group ">
                            <input type="submit" name="submit" value="Add-Category" class="btn btn-primary">
                        </div>
                        
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
