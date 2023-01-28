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
    <?php include_once 'css/customerpagecss.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/respond.min.js"></script>
</head>
<body>
<?php
    include "include/sidnav.php";
    ?>
<section class="header-custom">
        <div class="container border_bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="custom-titel">
                        <i class="fa fa-handshake-o " aria-hidden="true"> <span> Add </span> Customer</i>
                        <div class="h5">Add New Customer</div>
                    </div>
                </div>
            </div>
        </div>
</section>
               <form action="crud/addcustomer.php" method="post">
             <section class="Custom">
              <div class="container border_bottom">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="customername">Customer Name :</label></div>
                        <input type="text" class="form-control" placeholder="Name" id="customername" name="cname" >
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="customernumber">Customer Number :</label></div>
                        <input type="Number" class="form-control" placeholder="Number" id="customernumber"; name="cno">
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message-text" class="control-label"> Address :</label>
                            <textarea class="form-control" id="message-text"placeholder="Address" name="caddress" style"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">Doctor's Name :</label></div>
                        <input type="text" class="form-control" name="dname"  id="DoctorsName";">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message" class="control-label"> Doctor's Address :</label>
                            <textarea class="form-control" id="message" name="daddress" style></textarea>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="done-add">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="done">
                        <input type="submit"  name="sub" class="btn btn-success" value="add">

                    </div>
                </div>
            </div>
        </div>
        </form>

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
        <script src="js/bootstrap.min.js"></script><s></s>
    
    
</body>