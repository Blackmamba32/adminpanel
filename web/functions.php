<?php
// Create database connection
  function catMenu() {
    include('../connection.php');
    $stm="SELECT category_name FROM category";
            $qry=mysqli_query($conn, $stm);
            $count=mysqli_num_rows($qry);
            if($count>=1)
            {
                while($row=mysqli_fetch_array($qry))
                {
               echo "<li><a href='#'>".$row['category_name']."</a></li>";     
                }
            }
					}
function banner(){
  include('../connection.php');
$result = mysqli_query($conn, "SELECT * FROM gallery where gtype=1");
  
    while ($banimg = mysqli_fetch_array($result)) {
                echo "<li>";
                 echo "<img style=' width:850px;
  height:500px;' src='../".$banimg['image']."'";
                echo "class='img-responsive' alt=''/>";
                echo "</li>";
                                                    }
                    } 


?>