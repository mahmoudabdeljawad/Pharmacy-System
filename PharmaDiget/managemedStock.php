<?php 
 session_start();
 if(isset($_SESSION['success2'])){
    echo "<script>alert('Medcien stock Update successfully');</script>";
    unset($_SESSION['success2']);
}
if(isset($_SESSION['delete'])){
    echo "<script>alert('medcien Deleted');</script>";
    unset($_SESSION['delete']);
}
if(isset($_GET['id'])){
    include "include/conn.php";

    $deleteid=$_GET['id'];
    $sql1="DELETE FROM `medicines_stock` WHERE ID ='$deleteid'";
    $query1=mysqli_query($conn,$sql1);
    
    
}
 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/StockStyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
</head>

<body>
    <?php
    include "include/sidnav.php";
    ?>
        <section class="stock-titel">
            <div class="container border">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Stocklogo">
                            <i class="fa fa-shopping-bag" aria-hidden="true"> <span> Manage </span> Medicine Stock</i>
                            <div class="h5">Manage Exisitng Medicine Stock</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="search-stock">
            <div class="container border">
                <div class="row">

                    <div class="col-lg-5">
                        <form action="?" method="post">

                            <div class="search">
                                <input type="text" class="btn btn-default dropdown-toggle" placeholder=" By Medicine Name , Generic Name Or Supplier Name" id="ginirc" name="search">
                            </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="search " style="float:left;">
                            <button type="submit" name="submit" class="btn ">search</button>
                        </div>
                    </div>
                    </form>
                    <form action="##" method="post">
                        <div class="col-lg-2">
                            <div class="search ">
                                <button type="submit" class="btn btn-Danger" name="ots">Out Of Stock</button>
                            </div>
                        </div>
                    </form>

                    <form action="#" method="post">
                        <div class="col-lg-2">
                            <div class="search ">
                                <button type="submit" class="btn btn-warning" name="exp" style="margin-top:-12px">expired</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </section>
        <section class="Taple-stock">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-stockmed">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>ID.</th>
                                        <th>Medicine </th>
                                        <th>Packing</th>
                                        <th>Genric Name</th>
                                        <th>Patch ID</th>
                                        <th>Ex. Date (y/m/d)</th>
                                        <th>Supplier</th>
                                        <th>Qty</th>
                                        <th>PRICE /JD</th>
                                        <th>Action</th>

                                    </tr>

                                    <?php include "modale/medstockshow.php";?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end close for nav  -->
        </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script><s></s>
</body>
<style>
    .hideme {
        display: none;
        visibility: hidden;
    }
</style>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this invoice ?'))
        {
            $.ajax({
               url: 'managemedStock.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("medcien removed successfully");  
               }
            });
        }
    });
</script>