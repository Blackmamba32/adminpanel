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
                    <h1 class="page-header text-danger">Select a POST:</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
<div class="container">
    <div class="row">
          <?php
    // Create database connection
      include('connection.php');
               
  $result = mysqli_query($conn, "SELECT * FROM post");
 while ($row = mysqli_fetch_array($result)) {
   echo "<a href='viewpost.php?passp=".$row['post_id']."'>";
     echo "<h4 class='text-muted'>";
     echo "".$row['title']."</h4></a>";
                 
    }
           ?>
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