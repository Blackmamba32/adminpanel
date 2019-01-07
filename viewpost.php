 <?php
include('inc_session.php');?>
<?php
  // Create database connection
  include('connection.php');
//Using GET
$postIDie= $_GET['passp'];
  $result = mysqli_query($conn, "SELECT * FROM post where post_id= $postIDie");
 
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
                    <h1 class="page-header">Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
 while ($row = mysqli_fetch_array($result)) {
    echo "<div class='row'>";
    echo "<div class='well'>";
    echo "<div class='media'>";
    echo "<a class='pull-left' href='".$row['image']."'>";
    echo "<img class='media-object' src=".$row['image'].">";
    echo "</a>";
    echo "<div class='media-body'>";
    echo " <h2 class='media-heading text-bold'>".$row['heading']."</h2>";
    echo "<hr>";
    echo "<p class='lead'>".$row['shortstory']."</p> <br/>";
    echo "<p class='lead'>".$row['longstory']."</p><br/>";
    echo " </div>";
    echo "<hr>";
    echo "<small><p class='text-right'>-Category name: ";
  $cname= mysqli_query($conn,"SELECT category_name FROM category where category_id = ${row['category_id']}");
    $loginc = mysqli_fetch_array($cname);  
    echo "".$loginc['category_name']."</p></small><br/>";  
    echo "<small><p class='text-right '>-keywords:".$row['keyword']."</p></small><br/>";
    echo "<ul class='list-inline list-unstyled'>";
    echo "<li><span><i class='glyphicon glyphicon-calendar'>";
    echo"</i>".$row['postdate']."</span></li>";
    echo " </ul>";
    echo " </div>";
    echo " </div>";
  } 
?>

            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include('inc_footerscript.php');?>
    
</body>

</html>