<?php
include('../connection.php');
$result = mysqli_query($conn, "SELECT * FROM post order by post_id DESC LIMIT 0,6");
while ($p = mysqli_fetch_array($result)) {

 echo"<div class='col-md-6 top-text' style='border:1px solid #cccccc; min-height:600px; padding: 10px;'>";
		echo" <a href='single.html'><img class='img-responsive img' src='../".$p['image']."'  alt=''></a>";
		echo"<p><h5 class='top'><a href='single.html'>".$p['title']."</a></h5></p>";
	    echo"<p>".$p['shortstory']."</p>";
	     echo"<p>".$p['longstory']."</p>";
	     echo "<hr style='border-top: 0.8px dotted #8c8b8b;'";
		echo"<p><small>".$p['postdate']."";
		echo "</small></p>";
		 echo"</div>";

}
?>
