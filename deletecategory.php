<?php
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$cid = $_GET['cid'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM category WHERE category_id=$cid");
 
//redirecting to the display page (index.php in our case)
header("Location:viewcategory.php");
?>