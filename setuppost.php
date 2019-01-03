<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS post (
   post_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL ,
    keyword VARCHAR(50),
    description TEXT ,
    heading VARCHAR(50) NOT NULL,
    shortstory TEXT ,
    longstory TEXT,
    postdate DATETIME,
    category_id INT,
    user_id INT ,
    image VARCHAR(50) ,
    status TINYINT(1)
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
$stmt="INSERT INTO post(title,keyword, description,heading,shortstory,longstory,category_id,user_id,postdate,status) VALUES ('hello', 'world', 'Description is pure', 'head is up', 'short and sweet', 'thinking about that essaY', 0, 0, now(), 1)";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error($conn));
if($qry)
{
    echo "Default data added Successfully";
}
else
{
    echo "Inset Error into post table";
}
?>
 