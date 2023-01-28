<?php 
 session_start();

 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/stylesupplier.php';?>
    <script src="js/respond.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php
    include "include/sidnav.php";
    ?>

<section class="header-supplier">
        <div class="container border_bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="supplier-titel">
                        <i class="fa fa-users"  aria-hidden="true"> <span> Add </span> Supplier</i>
                        <div class="h5">Add New Supplier</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<form action="crud/newsupplyiers.php" method="post">
<section class="supplier-added">
    <div class="container border_bottom">
        <div class="row">
            <div class="col-lg-12">
                <div class="supplier-info">
                        <div><label for="SupplierName">Supplier Name :</label></div>
                        <input type="text" class="form-control" placeholder="Name" id="SupplierName" name="NAME">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="supplier-info">
                        <div><label for="SupplierEmail">Supplier Email :</label></div>
                        <input type="text" class="form-control" placeholder="Email" id="SupplierEmail" name="EMAIL">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="supplier-info">
                        <div><label for="Contact">Supplier Contact Number :</label></div>
                        <input type="text" class="form-control" placeholder="Number" id="Contact"  name="CONTACT_NUMBER">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="supplier-info">
                    <div class="form-group">
                        <label for="Address" class="control-label"> Supplier Address :</label>
                            <textarea class="form-control" id="address" name="ADDRESS"></textarea>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="done">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="Done-added">
                        <button type="submit" class="btn btn-success">Add</button>

                    </div>
                </div>
            </div>
        </div>
</section>
</form>

   <!-- end close for nav  -->
    </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script><s></s>



</body>