<?php include "include/conn.php";
 session_start();

$id=$_GET['id'];
$sql="SELECT * FROM invoices where INVOICE_ID='$id'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){   
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
                        <i class="fa fa-handshake-o " aria-hidden="true"> <span> Update </span> invoice</i>
                        <div class="h5">Uppdate invoice</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<form action="crud/updateinvoice.php?id=<?php echo $id; ?>" method="post">
<section class="Custom">
    <div class="container border_bottom">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <input type="hidden" class="form-control" value="<?php echo $row['invoice_nm'] ?>" id="customername"name="a0"  VALUE="<?php echo $id; ?>" requierd>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="customernumber">Customer name :</label></div>
                        <input type="text" class="form-control" value="<?php echo $row['CUSTOMER_name'] ?>" id="customernumber"; name="a1" requierd>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message-text" class="control-label"> Medcien name :</label>
                        <input type="text" class="form-control" name="a2"  id="DoctorsName"value="<?php echo $row['medcien_name'] ?>" requierd>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">date :</label></div>
                        <input type="text" class="form-control" name="a3"  id="DoctorsName"value="<?php echo $row['INVOICE_DATE'] ?>" requierd>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">total amount :</label></div>
                        <input type="text" class="form-control" name="a4"  id="DoctorsName"value="<?php echo $row['TOTAL_AMOUNT'] ?>" requierd>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">total discount :</label></div>
                        <input type="text" class="form-control" name="a5"  id="DoctorsName"value="<?php echo $row['TOTAL_DISCOUNT'] ?>" requierd>
                </div>
            </div>
        </div>
</section>
<section class="done-add">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="done">
                        <input type="submit"  name="sub" class="btn btn-success" value="update">

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
<?php } ?>