<?php include "include/conn.php";
 session_start();

$id=$_GET['id'];
$sql="SELECT * FROM medicines_stock where ID='$id'";
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
                        <i class="fa fa-handshake-o " aria-hidden="true"> <span> Update </span> MedcienStock</i><br><br>
                        <div class="h5">Uppdate MedcienStock</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<form action="crud/medstockupdate.php?id=<?php echo $id; ?>" method="post">
<section class="Custom">
    <div class="container border_bottom">
        <div class="row">
          

            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="customernumber">Medcien Name :</label></div>
                        <input type="text" class="form-control" value="<?php echo $row['NAME'] ?>" id="customernumber"; name="NAME" requierd>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                    <div class="form-group">
                        <label for="message-text" class="control-label">PACKING:</label>
                        <input type="number" class="form-control" name="PACKING"  id="DoctorsName" placeholder="<?php echo $row['PACKING'] ?>" requierd>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">GENERIC_NAME:</label></div>
                        <input type="text" class="form-control" name="GENERIC_NAME"  id="DoctorsName" value="<?php echo $row['GENERIC_NAME'] ?>" requierd>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">BATCH_ID:</label></div>
                        <input type="number" class="form-control"   id="DoctorsName" name="BATCH_ID" value="<?php echo $row['BATCH_ID'] ?>" requierd>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">Ex. Date (mm/yy):</label></div>
                        <input type="date" class="form-control"   id="DoctorsName" name="EXPIRY_DATE" value="<?php echo $row['EXPIRY_DATE'] ?>" requierd>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">SUPPLIER_NAME:</label></div>
                        <input type="text" class="form-control" name="SUPPLIER_NAME"  id="DoctorsName" value="<?php echo $row['SUPPLIER_NAME'] ?>" requierd>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">QUANTITY:</label></div>
                        <input type="number" class="form-control" id ="DoctorsName" name="QUANTITY" value="<?php echo $row['QUANTITY'] ?>" requierd>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="info-custom">
                        <div><label for="DoctorsName">Price:</label></div>
                        <input type="number" class="form-control" id ="DoctorsName" name="price" value="<?php echo $row['MRP'] ?>"requierd>
                </div>
            </div>
            
            
           
          
        </div>
</section>
<section class="done-add">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="done">
                        <input type="submit"name="update" class="btn btn-success" value="update">

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