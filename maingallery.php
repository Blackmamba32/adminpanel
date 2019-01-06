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
                    <h1 class="page-header text-danger">Select an Album</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
<div class="container">
    <div class="row">
          <a href="viewgallery.php?varname=<?php echo 1 ?>">
            <img src="./images/banner.png" class="img-responsive"  title="Banner" height="500" width="550" />
        </a>
      

    
        <a href="viewgallery.php?varname=<?php echo 2 ?>">
            <img src="./images/slider.png" class="img-responsive"  title="Slider" height="500" width="550" />
        </a>
    

  
        <a href="viewgallery.php?varname=<?php echo 3 ?>">
            <img src="./images/gallery.png" class="img-responsive"  title="Gallery" height="500" width="550" />
        </a>
    </div>
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