<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL ,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role TINYINT(2) NOT NULL,
    status TINYINT(1) NOT NULL,
    UNIQUE (username),
    UNIQUE (email)    
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
$stmt="INSERT INTO login(username, password, email, role, status) VALUES ('admin', 'admin' , 'drpoudel@outlook.com', 1,1)"; 
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{
	echo "Default data added Successfully";
}
else
{
	echo "Inset Error into loign table";
}
?>
 