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
    <?php include_once 'css/PurchaseReportStyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/respond.min.js"></script>


</head>


<body>
<?php
    include "include/sidnav.php";
    ?>

<section class="PurchaseReport-titel">
        <div class="container border">
            <div class="row">
                <div class="col-lg-6">
                    <div class="PurchaseReport-Stocklogo">
                        <i class="fa fa-shopping-bag" aria-hidden="true"> <span> Purchase </span> Report </i>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="search-Purchase-Rep">
    <div class="container border">
        <div class="row">
        <form action="#" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="search">
                     <label>search </label>
                     <input type="text" class="btn btn-default dropdown-toggle" placeholder=" By Medicine Name , Generic Name Or Supplier Name"  name="SEARCH";>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="search">
                     <input type="submit" class="btn" placeholder=" By Medicine Name , Generic Name Or Supplier Name" name="search";>
                </div>
            </div>

            </form>

           




        </div>
    </div>
</section>

<section class="Taple-ManageStock">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-Manage-stock">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>ID.</th>
                                    <th>Purchase Date</th>
                                    <th>Invoice Number</th>
                                    <th>Supplier Name</th>
                                    <th>Total Amount /JD</th>
                                    
                               
                                </tr>
                                <?php
                                include ("include/conn.php");
                                    if(isset($_POST['SEARCH'])){
                                    $SEARCH=$_POST['SEARCH'];
                                        $sql="SELECT * from purchases where CONCAT(PURCHASE_DATE,SUPPLIER_NAME,TOTAL_AMOUNT) LIKE '%$SEARCH%'";
                                        $query=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_assoc($query)){
                                       
                                        @$count= $count+$row['TOTAL_AMOUNT'];
                                           ?>
                                            <tr>
                                            <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['PURCHASE_DATE'];?></td>
                                    <td><?php echo $row['INVOICE_NUMBER'];?></td>

                                    <td><?php echo $row['SUPPLIER_NAME'];?></td>
                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                            </tr>
                                            <?php 
                                        
                                      
                                    }}else{
                               
                                $sql="SELECT * from purchases";
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){
                                        
                                        @$count=$count+$row['TOTAL_AMOUNT'];
                                    
                                        
                                    ?><tr>
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['PURCHASE_DATE'];?></td>
                                    <td><?php echo $row['INVOICE_NUMBER'];?></td>

                                    <td><?php echo $row['SUPPLIER_NAME'];?></td>
                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                               <?php }}?>
                                    </tr>
                                <tr>
                                    
                                    <td colspan="4" style="font-size:40px;color:blue">Total Purchase =</td>
                                    <td style="font-size:40px" ><?php echo @$count ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
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
        <script src="js/bootstrap.min.js"></script><s></s>
</body>