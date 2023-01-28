<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/invoice.php';?>
    <script src="js/respond.min.js"></script>
    <script src="js/suggestions.js"></script>
    <script src="js/add_new_invoice.js"></script>
    <script src="js/validateForm.js"></script>

    <title>Document</title>
</head>
<body>
    <?php
    include "include/sidnav.php";
    ?>
    <section class="header">
        <div class="container border_bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="create_invoice">
                        <i class="fa fa-clipboard" aria-hidden="true"> <span> New </span> Invoice</i>
                        <div class="h5">Create New Invoice</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form id="saveForm" action="php/newinvoice.php" method="post"></form>
    <form id="saveForm1" action="php/newinvoice.php" method="post"></form>

    <section class="headertwo  text-center">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="invoice">
                        <div><label>Customer name</label></div>
                        <input class="btn btn-default dropdown-toggle" form="saveForm" name="cn" id="customers_name" type="text" placeholder="customer name" onkeyup="showSuggestions(this.value, 'customer');" required >
                        <div id="customer_suggestions" class="list-group position-fixed" style="z-index: 1;  overflow: auto; max-height: 200px;"></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="invoice">
                        <div><label>Address</label></div>
                        <input class="btn btn-default dropdown-toggle address " form="saveForm"  type=" text" placeholder="Address" id="customers_address"  required
                            disabled>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                <script>  getInvoiceNumber(); </script>

                    <div class="invoice">
                        <div ><label for="invoice_number">Invoice Number</label></div>
                        <input class="btn btn-default dropdown-toggle" type="text" form="saveForm" placeholder="Invoce Nomber" id="invoice_number" name="invoice_number" required>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="headerthree text-center">
        <div class=" container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact">
                        <label for="">Payment Type</label>
                        <div>
                            <select id="" class="form-control">
                                <option value="volvo">Cash Payment</option>
                                <option value="saab">Card Payment</option>
                                <option value="opel">Net Payment</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact">
                        <label for=""> Date:</label>
                        <div><input type="date" name="date" form="saveForm" class="btn btn-default dropdown-toggle" value='<?php echo date('Y-m-d');?>' onblur="checkDate(this.value, 'date_error');"  required></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="contact">
                        <div><label>Contact Number</label></div>
                        <input class="btn btn-default dropdown-toggle num " form="saveForm" type=" text" placeholder="Contact Number" id="customers_contact_number" required
                            disabled>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="button-customer text-center">
            <div class="container second_border">
                <div class=" row">
                    <div class="col-lg-12">
                        <div class="new_button">
                            <!-- <button type="button" class="btn btn-primary">New Customer</button> -->

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#myModal">
                                New Customer
                            </button>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container contact">
        <!-- invoice medicen ajax rows name  -->
    <div class="row col col-md-12">
            <div class="row col col-md-12 font-weight-bold">
              <div class="col col-md-2 font-weight-bold" style="font-size:15px" >Medicine Name</div>
              <div class="col col-md-2">Batch ID</div>
              <div class="col col-md-1">Ava.Qty.</div>
              <div class="col col-md-1">Expiry</div>
              <div class="col col-md-1">Quantity</div>
              <div class="col col-md-1">price/JD </div>
              <div class="col col-md-1">Discount(%)</div>
              <div class="col col-md-1">Total price</div>
              <div class="col col-md-2">Action</div>
            </div>
          </div>
          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  white;">
          </div>
          
          <div class="row col col-md-12 " id="invoice_medicine_list_div">
            <script> addRow(); getInvoiceNumber(); </script>
          </div></div>
        <!-- end medicen ajax rows name  -->

    <section class="cash text-center">
        <div class="container thired_border">
            <div class="row">
                <div class="col-lg-4">
                    <div class="totalscash">
                        <div>
                            <label class="batch">Total Amount </label>
                        </div>
                        <input class="btn btn-default dropdown-toggle " name="total"  type=" Text" value="0" id="total_amount" >
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="totalscash">
                        <div>
                            <label class="batch">Total Discount </label>
                        </div>
                        <input class="btn btn-default dropdown-toggle  " form="saveForm" name="td"  type=" Text" value="0" id="total_discount" >
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="totalscash">
                        <div>
                            <label class="batch">Net Total </label>
                        </div>
                        <input class="btn btn-default dropdown-toggle " name="nt" form="saveForm" type=" Text" value="0" id="net_total" >
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="save">
                        <input type="submit" name="addinvoice" class="btn btn-success" form="saveForm" value="submit" >

                    </div>
                </div>
            </div>
        </div>

    </section>
<form>
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
    <div class="modal fade center2" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:yellow">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">New Customer</h4>
                                        </div>
                                        <div class="modal-body" style="text-align:center;">
                                            
                                                <div><label>Customer Name : </label></div>
                                                <input class="btn btn-default dropdown-toggle " form="saveForm1" type=" text" name="cname" required
                                                    placeholder="Name">
                                                <div><label>Customer Number :</label></div>
                                                <input class="btn btn-default dropdown-toggle " form="saveForm1" type=" text" name="cno" required
                                                    placeholder="Number">
                                                    <div><label>Customer Address:</label></div>
                                                <input class="btn btn-default dropdown-toggle " form="saveForm1" type=" text" name="caddress" required
                                                    placeholder="address">
                                                
                                                <div><label>Doctor's Name :</label></div>
                                                <input class="btn btn-default dropdown-toggle " form="saveForm1" type=" address" placeholder="" name="DoctorsName" required>
                                                <div><label>Doctor Address:</label></div>
                                                <input class="btn btn-default dropdown-toggle " form="saveForm1" type=" text" name="daddress" required
                                                    placeholder="address">
                                            
                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary" form="saveForm1" name="newcustomer">add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
</body>
</html>
<style>

</style>