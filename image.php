
<?php
if(isset($_POST['submit']))
{
	$fileExistsFlag = 0; 
	$fileName = $_FILES['Filename']['name'];
	include('connection.php');
	/* 
	*	Checking whether the file already exists in the destination folder 
	*/
	$query = "SELECT image FROM post WHERE image='$fileName'";	
	$result = $conn->query($query) or die("Error : ".mysqli_error($conn));
	while($row = mysqli_fetch_array($result)) {
		if($row['image'] == $fileName) {
			$fileExistsFlag = 1;
		}		
	}
	/*
	* 	If file is not present in the destination folder
	*/
	if($fileExistsFlag == 0) { 
		$target = "upload/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["Filename"]["tmp_name"];
		$fileDescription = $_POST['Description'];	
		$result = move_uploaded_file($tempFileName,$fileTarget);
		/*
		*	If file was successfully uploaded in the destination folder
		*/
		if($result) { 
			echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
			$query = "INSERT INTO post(image) VALUES ('$fileTarget')";
			$conn->query($query) or die("Error : ".mysqli_error($conn));			
		}
		else {			
			echo "Sorry !!! There was an error in uploading your file";			
		}
		mysqli_close($conn);
	}
	/*
	* 	If file is already present in the destination folder
	*/
	else {
		echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
		mysqli_close($conn);
	}	
}
?>


    <input type="file" name="Filename"> 
    
    
