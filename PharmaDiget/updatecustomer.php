<?php session_start();
include "include/conn.php";

$id=$_GET['id'];
$sql="SELECT * FROM customers where ID='$id'";
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
                        <i class="fa fa-handshake-o " aria-hidden="true"> <span> Update </span> Customers</i>
                        <div class="h5">Update customer</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<form action="crud/updatecustomer.php" method="post">
<section class="Custom">
    <div class="container border_bottom">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <input type="" class="form-control" value="<?php echo $row['ID'] ?>" id="customername"name="id"  VALUE="<?php echo $id; ?>">
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="customernumber">Customer NAME :</label></div>
                        <input type="text" class="form-control"  name="cname" value="<?php echo $row['NAME'] ?>" id="customernumber"; >
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message-text" class="control-label"> CONTACT_NUMBER :</label>
                        <input type="text" class="form-control" name="cno"  id="DoctorsName"value="<?php echo $row['CONTACT_NUMBER'] ?>">
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">ADDRESS :</label></div>
                        <input type="text" class="form-control" name="address"  id="DoctorsName"value="<?php echo $row['ADDRESS'] ?>">
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">DOCTOR_NAME:</label></div>
                        <input type="text" class="form-control" name="dname"  id="DoctorsName"value="<?php echo $row['DOCTOR_NAME'] ?>">
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">DOCTOR_ADDRESS:</label></div>
                        <input type="text" class="form-control" name="daddress"  id="DoctorsName" value="<?php echo $row['DOCTOR_ADDRESS'] ?>">
                </div>
            </div>
        </div>
</section>
<section class="done-add">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="done">
                        <input type="submit"  name="update" class="btn btn-success" value="Update">

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