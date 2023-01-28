<?php 
session_start();

if(isset($_SESSION['success'])){
   echo "<script>alert('New medcien add successfully');</script>";
   unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
   echo "<script>alert('customer Update successfully');</script>";
   unset($_SESSION['success1']);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/medicineStyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
    <script src="js/suggestions.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
</head>
<body>
    <?php
    include "include/sidnav.php";
    ?>
        <section class="Med-titel">
            <div class="container border">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="Medicinelogo">
                            <i class="fa fa-handshake-o " aria-hidden="true"> <span> Add </span> Medicine</i>
                            <div class="h5">Add New Medicine</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <form action="crud/addmedicen.php" method="post">
            <section class="medicine-info">
                <div class="container border">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="medicine-feiled">
                                <div class="feiled">
                                    <label for="Name">Medicine Name: </label>
                                    <input type="text" class="form-control" name="medcien_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Name">GENERIC_NAME: </label>
                                    <input type="text" class="form-control " name="GENERIC_NAME" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Genaric ">PACKING : </label>
                                    <input type="number" class="form-control " name="PACKING" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Supplyer "> BATCH_ID : </label>
                                    <input type="number" class="form-control " name="BATCH_ID" required>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Genaric ">EXPIRY_DATE : </label>
                                    <input type="date" class="form-control" name="EXPIRY_DATE" required>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Supplyer "> QUANTITY : </label>
                                    <input type="number" class="form-control " name="QUANTITY" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Genaric">Price:</label>
                                    <input type="number" class="form-control " name="MRP" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 ">
                            <div class="medicine-feiled ">
                                <div class="feiled ">
                                    <label for="Supplyer "> SUPPLIER_NAME:</label>
                                    <input id="suppliers_name" type="text" class="form-control" id="suppliers_name" placeholder="Supplier Name" name="suppliers_name" onkeyup="showSuggestions(this.value, 'supplier');" required>
                                    <div id="supplier_suggestions" class="list-group position-fixed"></div>
                                </div>
                            </div>
                        </div>
                        <section class="done-add ">
                            <div class="container ">
                                <div class="row ">
                                    <div class="col-lg-12 ">
                                        <div class="done ">
                                            <button type="submit " class="btn btn-success ">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

            </section>

        </form>
        <div class="container ">
            <div class="row ">
                <div class="medicine-feiled ">
                    <div class="feiled ">
                        <button type="button" class="btn btn-light btn-lg " data-toggle="modal" data-target="#myModal">
                                 Add New Supplier
                            </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade center2" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:yellow">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">New Supplier</h4>
                    </div>
                    <form action="crud/newsupplyiers.php" method="post">
                    <div class="modal-body" >
                        
                        <div><label for="SupplierName">Supplier Name :</label></div>
                        <input type="text" class="form-control" placeholder="Name" id="SupplierName" name="NAME" style="text-align: center;" required>
                        <div><label for="SupplierEmail">Supplier Email :</label></div>
                        <input type="text" class="form-control" placeholder="Email" id="SupplierEmail" name="EMAIL" style="text-align: center;" required>
                        <div><label for="Contact">Supplier Contact Number :</label></div>
                        <input type="text" class="form-control" placeholder="Number" id="Contact"  name="CONTACT_NUMBER" style="text-align: center;" required>

                        <div><label for="Contact">Supplier Address :</label></div>
                        <input type="text" class="form-control" placeholder="address" id="Contact"  name="ADDRESS" style="text-align: center;" required>
                    </div>
                    <div class="modal-footer">

                        <input type="submit" class="btn btn-primary" value="Add">
                    </div>
                </div>
            </div>
        </div>
</form>
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
        <script src="js/jquery.min.js "></script>
        <script src="js/bootstrap.min.js "></script><s></s>


</body>