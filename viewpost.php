<?php
include('inc_session.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('inc_headsection.php');?>
    <link href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">

            <table class="table" id="my Table">
            <thead>
                <tr>
                    <td>Post Id</td>
                    <td>Title</td>
                    <td>keyword</td>
                     <td>Description</td>
                    <td>Heading</td>
                     <td>Short Story</td>
                    <td>Long Story</td>
                     <td>Post Date</td>
                     <td>Category Id</td>
                     <td>User Id</td>
                   <td>Status</td>
                  <td>function</td>

                    
                </tr>
            </thead>

            <tfoot>
                <tr>
                   <td>Post Id</td>
                    <td>Title</td>
                    <td>keyword</td>
                     <td>Description</td>
                    <td>Heading</td>
                     <td>Short Story</td>
                    <td>Long Story</td>
                     <td>Post Date</td>
                     <td>Category Id</td>
                     <td>User Id</td>
                   <td>Status</td>
                  <td>function</td>







                </tr>
            </tfoot>

            <tbody>
            <?php
            $stm="SELECT * FROM post";
            include('connection.php');
            $qry=mysqli_query($conn, $stm);
            $count=mysqli_num_rows($qry);
            if($count>=1)
            {
                while($row=mysqli_fetch_array($qry))
                {
                    echo "<tr>";
                    echo "<td>".$row['post_id']."</td>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['keyword']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td>".$row['heading']."</td>";
                    echo "<td>".$row['shortstory']."</td>";
                    echo "<td>".$row['longstory']."</td>";
                    echo "<td>".$row['postdate']."</td>";
                    echo "<td>".$row['category_id']."</td>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['status']."</td>";
                    
                    echo "<td>Edit| Delete</td>";
                    echo "</tr>";
                }
            }
            else{
                echo "Soory no data found";
            }
            
            ?>
            </tbody>

            </table>
            </div>
               



            


            </div>
            <!-- /.row -->
      
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include('inc_footerscript.php');?>
    <script src="datatable/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>

</html>