 <?php
include('inc_session.php');?>
<?php
  // Create database connection
  include('connection.php');
//Using GET
$var_value = $_GET['varname'];
  $result = mysqli_query($conn, "SELECT * FROM gallery where gtype= $var_value");
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>

    <?php include('inc_headsection.php');?>



</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php
                    	$varname = $_REQUEST['varname'];
                    	if($varname== 1){
                    	echo "Banner";
                    }
                    	if($varname== 2){
                    	echo "Slider";
                    }
                    	if($varname== 3){
                    	echo "Gallery";
                    }
                 ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
      
 <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='".$row['image']."' >";
      	echo "<h4> Title:</h4>".$row['g_title'];
      	echo "<h4> desciption:</h4>"."<p>".$row['gallery_description']."</p>";
      	echo "<div>";
      	echo "</div>";
      echo "</div>";
 	}
 	
   
  ?>

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