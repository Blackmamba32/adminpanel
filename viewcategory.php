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
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <div class="col-md-12">

            <table class="table" id="myTable">
            <thead>
                <tr>
                    <td>category_id</td>
                    <td>category_name</td>
                    <td>category_status</td>

                    
                </tr>
            </thead>

            <tfoot>
                <tr>
                   <td>category_id</td>
                    <td>category_name</td>
                    <td>category_status</td>
                </tr>
            </tfoot>

            <tbody>
            <?php
            $stm="SELECT * FROM category";
            include('connection.php');
            $qry=mysqli_query($conn, $stm);
            $count=mysqli_num_rows($qry);
            if($count>=1)
            {
                while($row=mysqli_fetch_array($qry))
                {
                    echo "<tr>";
                    echo "<td>".$row['category_id']."</td>";
                    echo "<td>".$row['category_name']."</td>";
                    echo "<td>".$row['category_status']."</td>";
                    
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
