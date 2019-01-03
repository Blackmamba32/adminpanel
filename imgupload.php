<form enctype="multipart/form-data" action="insert_image.php" method="post" name="changer">
<input name="image" accept="image/jpeg" type="file">
<input value="Submit" type="submit">
</form>
<?php

  include 'conf.php';

  if ($_FILES["image"]["error"] > 0)
  {
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else
   {
     move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);
     echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="../uploads/".$_FILES["image"]["name"];
     $sql="INSERT INTO post (image) VALUES ('$file')";

     if (!mysql_query($sql))
     {
        die('Error: ' . mysql_error());
     }
     echo "<font size = '5'><font color=\"#0CF44A\">SAVED TO DATABASE";

   }

   mysql_close();

?>