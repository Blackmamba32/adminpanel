<?php
include('inc_session.php');?>
<?php
  // Create database connection
  include('connection.php');

 
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <?php include('inc_headsection.php');?>



</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Select Gallery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
      
<a href="viewgallery.php?varname=<?php echo 1 ?>"><h2 class=" text-secondary">Banner</h1></a><br>
<a href="viewgallery.php?varname=<?php echo 2 ?>"><h2 class=" text-secondary">Slider</h1></a><br>
<a href="viewgallery.php?varname=<?php echo 3 ?>"><h2 class=" text-secondary">Gallery</h1></a><br>

    
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