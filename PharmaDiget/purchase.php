<?php 
 session_start();
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/purchasestyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/suggestions.js"></script>
    <script src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/suggestions.js"></script>
    <script type="text/javascript" src="js/add_new_purchase.js"></script>
    <script type="text/javascript" src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
</head>

<body>
    <?php
    include "include/sidnav.php";
    ?>
    <section class="header-purchase">
        <div class="container border_bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="purchase-titel">
                        <i class="fa fa-bar-chart" aria-hidden="true"> <span> Add </span> Purchase</i>
                        <div class="h5">Add New Purchase</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form id="saveForm" action="crud/add_purchase.php" method="post"></form>
    <form id="saveForm1" action="crud/newsupplyiers.php" method="post"></form>

     <section class="purchase-info text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="forsupp">
                        <label for="Supplier">Supplier : </label>
                        <input type="text" class="form-control" id="suppliers_name" name="suppname"  placeholder="Supplier"onkeyup="showSuggestions(this.value, 'supplier');" form="saveForm" required>
                        <code class="text-danger small font-weight-bold float-right" id="supplier_name_error" style="display: none;"></code>
                        <div id="supplier_suggestions" class="list-group position-fixed" style="z-index: 1; width: 100%; overflow: auto; max-height: 200px;"></div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-6">
                        <div class="forsupp">
                            <label for="Name">Invoice Number : </label>
                            <input type="number" class="form-control" placeholder="Invoice Number" id="invoice_number" name="inv_num" form="saveForm" required>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="forsupp">
                            <label class="font-weight-bold" for="paytype">Payment Type :</label>
              <select id="payment_type" name="paytype" class="form-control" name="">
              	<option value="Cash Payment">Cash Payment</option>
                <option value="Net Banking">Net Banking</option>
                <option value="Payment Due">Payment Due</option>
              </select>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-6">
                            <div class="forsupp">
                                <label for="Name">Date : </label>
                                <input type="date" class="form-control" id="Supplier" name="date" form="saveForm" required>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="mod-sup">
        <div class="container border_bottom">
            <div clss="row">
                <div class="col-lg-12">
                    <div class="new_button ">
                        <!-- <button type="button" class="btn btn-primary">New Customer</button> -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="font-size:12px">
                            Add New Supplier
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>  <br>  <br>

           
            <div class="row col col-md-12 font-weight-bold">
            <div class="col col-md-2">Medicine Name</div>
            <div class="col col-md-1">Packing</div>
            <div class="col col-md-2">Batch ID</div>
            <div class="col col-md-2">Ex. Date (mm/yy)</div>
            <div class="col col-md-1">Quantity</div>
            <div class="col col-md-1">Price/JD</div>
              <div class="col col-md-1">Action</div>
           
            </div>
          </div>
   
          <div class="col col-md-12">
            <!-- <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  white;"> -->
          </div>
          <div class="row col col-md-12 " id="purchase_medicine_list_div">
            <script style="padding-left:-4px"> addRow();  </script>
          </div>
    </section>
    <section class="for-ginirc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ginric-input">
                        <div><label for="ginirc"> If new medicine, generic name :</label></div>
                    <input type="text" class="form-control" placeholder="Name" Name="gname" id="ginirc";">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grand-total text-center ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grand-input">
                        <div><label for="ginirc"> Grand Total: </label></div>
                    <input type="text" class="btn btn-default dropdown-toggle"  name="gtotal" id="sum" form="saveForm">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <form>
    <section class="save">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="save-done">
                    <button type="submit" class="btn btn-success" name="sub" form="saveForm">save</button>
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
    </div><!-- /#wrapper -->
     <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:yellow">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">New Supplier</h4>
                                    </div>
                                    <div class="modal-body text-center">
                                            <div><label>Supplier Name : </label></div>
                                            <input class="btn btn-default form-control  " type=" text" name="NAME" form="saveForm1" required
                                                placeholder="Name">

                                            <div><label>Supplier Email :</label></div>
                                            <input class="btn btn-default form-control " type=" text" name="EMAIL" form="saveForm1" required
                                                placeholder="Email">


                                            <div><label>Supplier Contact Number :</label></div>
                                            <input class="btn btn-default form-control" placeholder="supplyier number" type="number" name="CONTACT_NUMBER" form="saveForm1" required>


                                            <div class="form-group">
                                                <label for="message-text" class="control-label"> Supplier Address
                                                    :</label>
                                                <input class="btn btn-default form-control  " id="message-text" placeholder="Address" name='ADDRESS' form="saveForm1" required
                                                    >

                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">

                                    <button type="submit" class="btn btn-success" name="sub" form="saveForm1">save</button>
                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script><s></s>

<script>
$(function() {
    $("#quantity, #rate").on("keydown keyup", sum);
	function sum() {
	$("#sum").val(Number($("#quantity").val()) * Number($("#rate").val()));
	
	}
});</script>
</body>
<style>
    .col-md-12 {
    width: 100%;
    padding-left: 100px;
}
</style>