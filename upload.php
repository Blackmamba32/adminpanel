<!DOCTYPE html>
<html>
<head>
	<title></title>
      <?php include('inc_headsection.php');?>
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
</head>
<body>
	<?php

 
  
	if (isset($_POST['upload']))
	{
       $tmpname=$_FILES['imgUpload']['tmp_name'];
       $name=$_FILES['imgUpload']['name'];
       $type=$_FILES['imgUpload']['type'];
       $size=$_FILES['imgUpload']['size'];
       	
       	//upload path 
       	$path="../uploads/";

       	//uploading files
       	if (move_uploaded_file($tmpname, $path.$name)) {
           echo '<div class="alert alert-success">';
           echo '<strong>Image Uploaded!</strong>';
           echo '</div>';  
      
       	}
       	else{
       		echo "Error while uploading ";
       	}
       }
     
	?>
<form name="frmupload" action="" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>    Select image to upload:</legend>
		<br/>
    <div class="form-group">
      <input type="file" name="imgUpload" id="file-upload" class="new" />
     <label for="file-upload"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Choose a file…</span></label>
    <input type="submit"  name="upload" class="form-control" value="upload"/>
    </div>
    
</form>
	</fieldset>

        <?php include('inc_footerscript.php');?>

</body>
</html>