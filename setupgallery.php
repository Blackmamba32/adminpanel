<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS gallery(
   gallery_id INT AUTO_INCREMENT PRIMARY KEY,
    g_title VARCHAR(50) NOT NULL ,
    gallery_description TEXT ,
    image varchar (200),
    gtype int (20),
    post_id INT,
    user_id INT ,
    g_status TINYINT(1)
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
$stmt="INSERT INTO gallery(g_title, gallery_description, image, gtype, post_id, user_id, g_status) VALUES ('g-title','its gallery','image path',1,0,0, 1)";

//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
if($qry)
{
    echo "Default data added Successfully";
}
else
{
    echo "Inset Error into galllery table";
}
?>
 