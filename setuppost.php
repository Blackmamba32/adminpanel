<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS post (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL ,
    keyword VARCHAR(50),
    description TEXT ,
    heading VARCHAR(50) NOT NULL,
    shortstory TEXT ,
    longstory TEXT,
    postdate DATETIME,
    category_id INT ,
    user_id  ,
    image ,
    status ,

          
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
$stmt="INSERT INTO post VALUES "; 
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{
	echo "Default data added Successfully";
}
else
{
	echo "Inset Error into post table";
}
?>
 