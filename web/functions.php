


<?php 
  function catMenu() {
    $stm="SELECT category_name FROM category";
            include('../connection.php');
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
?>