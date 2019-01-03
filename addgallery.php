<?php
include('inc_session.php');?>
<?php
  // Create database connection
  include('connection.php');

  // Initialize message variable
 

  // If upload button is clicked ...
  if(isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$gallerydesc =$_POST['gallery_description'];
  	  	$uid =$_POST['u_id'];
  	  	$pid =$_POST['post_id'];
        $gtype=$_POST['gtype'];
        $title=$_POST['title'];





  	// image file directory
  	$target = "images/".$image;
 echo "console.log($image)";
  	$sql = "INSERT INTO gallery (image,g_title,gallery_description,gtype,post_id,user_id,g_status) VALUES ('$image', '$gallerydesc', '$gtype', $pid, $uid, 1)";
  	// execute query
  	mysqli_query($conn, $sql);
 
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($conn, "SELECT * FROM gallery");
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
                    <h1 class="page-header">New gallery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
      
 <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo $row['g_title'];
      	echo "<p>".$row['gallery_description']."</p>";
      	echo "<div>";
      	if($row['gtype']==1){
      		echo "banner type";

      	}
		elseif ($row['gtype']==2){

      	echo "slider type";
      	}  
 		elseif ($row['gtype']==3){
 		echo "gallery type";
 	}
 	echo "</div>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>

  	<div>

	<input type="text" class="form-control" name="title" id="username"  placeholder="Enter image title"/>

      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="gallery_description" 
      	placeholder="Say something about this image..."></textarea>
      	
  	</div>
  	  <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                               user_id
                            </label>
                             <?php
include('connection.php');
        $stmu= mysqli_query($conn, "SELECT * FROM login");
   echo '<select name="u_id"><option value="" SELECTED>Select user</option>';
while($row = mysqli_fetch_array($stmu))
{
    echo '<option value="'.$row['id'].'">'.$row['username'].'</option>';
   
}

            echo '</select>';

?>
                        </div>
                         <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                               user_id
                            </label>
                             <?php
include('connection.php');
        $stmp= mysqli_query($conn, "SELECT * FROM post");
   echo '<select name="post_id"><option value="" SELECTED>Select user</option>';
while($row = mysqli_fetch_array($stmp))
{
    echo '<option value="'.$row['post_id'].'">'.$row['title'].'</option>';
   
}

            echo '</select>';

?>
                        </div>
               <div class="checkbox"><input type="radio" name="gtype" value="1" checked> Banner</div>
                         
               <div class="checkbox"><input type="radio" name="gtype" value="2" > Slider</div> 
               <div class="checkbox"><input type="radio" name="gtype" value="3" > Gallery</div>         

  	<div>
  		<button type="submit" name="upload">POST</button>
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