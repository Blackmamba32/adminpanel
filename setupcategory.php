<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS category(
    category_id INT AUTO_INCREMENT primary key  ,
    category_name VARCHAR(50) NOT NULL ,
      
    category_status TINYINT(1) NOT NULL,
    UNIQUE (category_name)
    )";
$qry=mysqli_query($conn, $stmt);
if($qry)
{
	echo "Table Created Successfully";
}
else
{
	echo "Error Creating table or might be exist";
}

//Inserting the Default Data
$stmt="INSERT INTO category (category_name,category_status) VALUES ('shoes', 1)"; 
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{
	echo "Default data added Successfully";
}
else
{
	echo "Insert Error into category table";
}
?>
 