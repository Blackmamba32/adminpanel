<?php
include('inc_session.php');?>
<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
   $title=$_POST['title'];
   $keyw=$_POST['keyword'];
   $desc=$_POST['description'];
   $headI=$_POST['heading'];
   $shortS=$_POST['shortstory'];
   $longS=$_POST['longstory'];
   $cid=$_POST['c_id'];
   $uid=$_POST['u_id'];
    
//making statement
$stmt="INSERT INTO post(title,keyword, description,heading,shortstory,longstory,category_id,user_id,postdate,status) VALUES ('$title', '$keyw', '$desc', '$headI', '$shortS', '$longS', $cid, $uid, now(), 1)";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
 
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
                    <h1 class="page-header">Posts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">
             <form class="form-horizontal" name="confirmationForm" method="post" action="#">
                        
                        
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
                       
                        <div class="form-group ">
                           <?php include('image.php'); ?>
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
