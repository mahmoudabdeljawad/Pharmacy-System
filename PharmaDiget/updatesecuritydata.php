<?php session_start();
include "include/conn.php";

$id=$_GET['id'];
$sql="SELECT * FROM employee where id='$id'";
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
                        <i class="fa fa-handshake-o " aria-hidden="true"> <span> Update </span> employee</i>
                        <div class="h5">Update Employee</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<form action="crud/updatesecuritydata.php" method="post">
<section class="Custom">
    <div class="container border_bottom">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <input type="hidden" class="form-control" value="<?php echo $id;?>"  name="id" requierd >
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="customernumber">NAME :</label></div>
                        <input type="text" class="form-control"  name="name" value="<?php echo $row['name'] ?>" id="customernumber"; requierd>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message-text" class="control-label"> Employee name :</label>
                        <input type="text" class="form-control" name="empname"  id="DoctorsName"value="<?php echo $row['empname'] ?>" requierd>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">EMAIL :</label></div>
                        <input type="text" class="form-control" name="email"  id="DoctorsName"value="<?php echo $row['email'] ?>" requierd>
                </div>
            </div>

            
        </div>
</section>
<section class="done-add">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="done">
                        <input type="submit"  name="sub" class="btn btn-success" value="Update">

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