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
    <?php include_once 'css/SalesReportStyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
</head>
<body>
<?php
    include "include/sidnav.php";
    ?>

<section class="SalesReport-titel">
        <div class="container border">
            <div class="row">
                <div class="col-lg-6">
                    <div class="SalesReport-Stocklogo">
                        <i class="fa fa-shopping-bag" aria-hidden="true"> <span> Sales </span> Report</i>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="search-ManageStock">
    <div class="container border">
        <form action="#" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="search">
                     <label>search </label>
                     <input type="text" class="btn btn-default dropdown-toggle" placeholder=" By Medicine Name , Generic Name Or Supplier Name"  name="date";>
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

<section class="Taple-SaleP">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-Sale-Rep">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>ID  </th>
                                    <th>Sales Date  </th>
                                    <th>Invoice Number</th>
                                    <th>Customer Name</th>
                                    <th>Total Amount /JD</th>
                                    
                               
                                </tr>
                                <tr>
                                <?php
                                    include ("include/conn.php");
                                    if(isset($_POST['date'])){
                                    $date=$_POST['date'];
                                        $sql="SELECT * from invoices where CONCAT(INVOICE_DATE,CUSTOMER_name,invoice_nm) LIKE '%$date%'";
                                        $query=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_assoc($query)){
                                        @$count= $count+$row['TOTAL_AMOUNT'];
                                           ?>
                                          <td><?php echo $row['INVOICE_ID'];?></td>
                                <td><?php echo $row['INVOICE_DATE'];?></td>
                                    <td><?php echo $row['invoice_nm'];?></td>
                                    <td><?php echo $row['CUSTOMER_name'];?></td>
                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                            </tr>
                                            <?php  
                                       }
                                       }else{
                                       
                                ?>
                                <?php    
                               
                                        $sql="SELECT * FROM `invoices` ";
                                        $query=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_assoc($query)){
                                           
                                            @$count= $count+$row['TOTAL_AMOUNT'];
                                ?>
                                <tr>
                                <td><?php echo $row['INVOICE_ID'];?></td>
                                <td><?php echo $row['INVOICE_DATE'];?></td>

                                    <td><?php echo $row['invoice_nm'];?></td>
                                    <td><?php echo $row['CUSTOMER_name'];?></td>

                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                                  
                                </tr>
                                        <?php }} ?>
                                    
                                    <td colspan="4" style="font-size:40px;color:blue">Total Sales =</td>
                                    <td style="font-size:40px" ><?php echo  @$count; ?></td>
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