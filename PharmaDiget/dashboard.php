<?php
session_start();
if(!isset($_SESSION['uname'])){
    header ("location:login.php");}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/dashstyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/respond.min.js"></script>


</head>

<body>
   
<?php
    include "include/sidnav.php";
    ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main">
                    <div class="col-lg-12 well  " id="content">
                        <!-- start section  header two -->


                        <!--  end section header  two  -->

                        <!-- start header three  -->
                            <?php include "include/total.php" ?>
                        <section class="headertwo">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-lg-8">
                                        <div class="col-lg-4 col-md-4 ">
                                            <div class="dasbbord-stats"  style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"> <?php echo $count1; ?></span>
                                                    <span class="h6 arrow"> <i class="fa fa-angle-up "
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Total Customer</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 ">
                                            <div class="dasbbord-stats"  style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"><?php echo $count2; ?></span>
                                                    <span class="h6 arrow"> <i class="fa fa-angle-up "
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Total Supplier</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="dasbbord-stats" style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"><?php echo $count3; ?></span>
                                                    <span class="h6 arrow"> <i class="fa fa-angle-up"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Total Medicine</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="dasbbord-stats" style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"><?php echo $count4; ?></span>
                                                    <span class="h6 arrow"> <i class="fa fa-angle-up"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Out Of Stock</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="dasbbord-stats" style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"><?php echo $count6; ?></span>
                                                    <span class="h6 arrow"> <i class="fa fa-angle-up"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Expierd</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="dasbbord-stats" style=" background-image: linear-gradient( #404a57,#b7ceff);">
                                                <a href="#">
                                                    <span class="h4"><?php echo $count;?></span>
                                                    <span class="h6 arrow "> <i class="fa fa-angle-up"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div> Total Invoice</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="today-reports">
                                            <div class="h5">Today Reports</div>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <?php 
                                                    $date=$date= date("Y-m-d");
                                                    $sql="SELECT * FROM invoices where INVOICE_DATE = '$date'";
                                                    $query=mysqli_query($conn,$sql);
                                                    $count=(mysqli_num_rows($query));
                                                    if($count>0){
                                                    while($row=mysqli_fetch_assoc($query)){
                                                        
                                                        @$total=$total+$row['TOTAL_AMOUNT'];

                                                    }}else $total=0;
                                                    ?>
                                                    <tr>
                                                        <th>Total Sales</th>
                                                        <th style="color: red;"><?php echo $total; ?>.0 JD </th>
                                                    </tr>
                                                    <tr>
                                                        <?php
                                                         
                                                         $date1=$date1= date("Y-m-d");
                                                         $sql="SELECT * from purchases WHERE PURCHASE_DATE = '$date1' ";
                                                         $query=mysqli_query($conn,$sql);
                                                         $count=(mysqli_num_rows($query));
                                                         if($count>0){
                                                         while($row=mysqli_fetch_assoc($query)){
                                                             
                                                             @$paid = $paid + $row['TOTAL_AMOUNT'];
                                                         }}else $paid=0;
                                                         ?>
                                                        <th>Total Purchase</th>
                                                        <th><?php  echo $paid; ?>.0 JD </th>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!--  end section header  two  -->

                        <!-- start header three  -->
                        <section class="transaction">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="col-lg-3 ">
                                            <div class="transaction-box "style=" background-image: linear-gradient( #a6cbff,white);">
                                                <a href="invoice.php">
                                                    <span class="h5"><i class="fa fa-id-card fa-2x"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                    <div>Creat New Invoce</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <div class="transaction-box" style=  "   background-image: linear-gradient( #a6cbff,white);">
                                                <a href="customerpage.php">
                                                    <span class="h5"><i class="fa fa-handshake-o  fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Add New Customer </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <div class="transaction-box"style="     background-image: linear-gradient( #a6cbff,white);">
                                                <a href="medecine.php">
                                                    <span class="h5"><i class="fa fa-shopping-bag fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Add New Medecine</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <div class="transaction-box" style="    background-image: linear-gradient( #a6cbff,white);">
                                                <a href="Supplier.php">
                                                    <span class="h5"><i class="fa fa-users fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Add New Supplier</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">



                                        <div class="col-lg-3 ">
                                            <div class="transaction-box"style="    background-image: linear-gradient( #a6cbff,white);">
                                                <a href="purchase.php">
                                                    <span class="h5"><i class="fa fa-bar-chart fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Add New Purchase</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <div class="transaction-box"style="  background-image: linear-gradient( #a6cbff,white);">
                                                <a href="SalesReport.php">
                                                    <span class="h5"><i class="fa fa-address-book fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Sales Reports</div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <div class="transaction-box"style="   background-image: linear-gradient( #a6cbff,white);">
                                                <a href="PurchaseReport.php">
                                                    <span class="h5"><i class="fa fa-address-book fa-2x"
                                                            aria-hidden="true"></i>

                                                    </span>
                                                    <div>Purchase Reports</div>
                                                </a>
                                            </div>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>


</html>
<style>
    
</style>