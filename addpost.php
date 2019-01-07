<?php
include('inc_session.php');?>
<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    include ('connection.php');
    //getting user-id from session['username']
    $user= $_SESSION['username'];
       $smp= mysqli_query($conn, "SELECT id FROM login where username='$user'");
      $loginRow = mysqli_fetch_array($smp);
      $uid= $loginRow['id'];

    //getting the data from form
   $title=$_POST['title'];
   $keyw=$_POST['keyword'];
   $desc=$_POST['description'];
   $headI=$_POST['heading'];
   $shortS=$_POST['shortstory'];
   $longS=$_POST['longstory'];
   $cid=$_POST['c_id'];
  
   // Get image name
    $image=$_FILES['image']['name'];
    
      // image file directory
    $target = "images/".$image;
    
//making statement
$stmt="INSERT INTO post(title,keyword,image,description,heading,shortstory,longstory,category_id,user_id,postdate,status) VALUES ('$title', '$keyw', '$target','$desc', '$headI', '$shortS', '$longS', $cid, $uid, now(), 1)";
//making connection
include('connection.php');


 // execute query
 $qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  
//giving the message
if($qry)
{ 
echo '<div class="alert alert-success">';
echo '<strong>Post Added!</strong>';
echo '</div>';
  
}
else {echo "Somthing wrong while adding new post ";}

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
                    <h1 class="page-header">Posts
                            
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
             <form class="form-horizontal" name="confirmationForm" method="post" action="#" enctype="multipart/form-data">
                <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                             <h3 class="text-muted">User:</h3> <?php echo $_SESSION['username'];?>
                            </label>
                           
                            </div>
                        
                        
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">Title</label>
                           
                                    <input type="text" class="form-control" name="title"   placeholder="Post title"/>  
                        </div>
                         <div class="form-group">
                            <label  class="cols-sm-2 control-label">keyword</label>
                           
                                    <input type="text" class="form-control" name="keyword"   placeholder=""/>  
                        </div>
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">Description</label>
                           
                                    <input type="text" class="form-control" name="description"   placeholder=""/>  
                        </div>
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">heading</label>
                           
                                    <input type="text" class="form-control" name="heading"   placeholder=""/>  
                        </div>
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                                Shortstory
                            </label>
                           <textarea class="text" cols="40" rows ="14" name="shortstory"></textarea>
                                    
                        </div>
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                               longstory
                            </label>
                           <textarea class="text" cols="86" rows ="20" name="longstory"></textarea>
                                    
                        </div>
                         <div class="form-group">
                            <label  class="cols-sm-2 control-label">
                               category_id
                            </label>
                             <?php
                            include('connection.php');
                                    $stmc= mysqli_query($conn, "SELECT * FROM category");
                               echo '<select name="c_id"><option value="" SELECTED>Select  category</option>';
                            while($row = mysqli_fetch_array($stmc))
                            {
                                echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
                               
                            }

                                        echo '</select>';

                            ?>
                        </div>
                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">Post Image:</label>
                       <input type="hidden" name="size" value="1000000">
                        <div>
                          <input type="file" name="image">
                        </div>
                       
                          </div>

                        

                        <div class="form-group ">
                            <input type="submit" name="submit" value="Add Post" class="btn btn-primary">
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
