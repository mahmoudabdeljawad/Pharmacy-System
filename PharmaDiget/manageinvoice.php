<?php session_start();
if(isset($_SESSION['success'])){
    echo "<script>alert('New invoice add successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('Invoice Update successfully');</script>";
    unset($_SESSION['success1']);
}
if(isset($_SESSION['delete'])){
    echo "<script>alert('invoice Deleted');</script>";
    unset($_SESSION['delete']);
}
if(isset($_GET['id'])){
    include ("include/conn.php");
    $deleteid=$_GET['id'];
    $sql="DELETE FROM `invoices` WHERE INVOICE_ID ='$deleteid'";
    $query=mysqli_query($conn,$sql);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/manageinvicecss.php';?>
    <script src="js/respond.min.js"></script>
</head>
<body>
<?php

    include "include/sidnav.php";
    ?>
    <section class="manage_invoice">
        <div class="container border_under">
            <div class="row">
                <div class="col-lg-6">
                    <div class="manage">
                        <i class="fa fa-id-card " aria-hidden="true"> <span> Manage </span> Invoice</i>
                        <div class="h5">Manage Existing Invoice </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="invoice_data text-center">
        <div class="container border_under">
            <div class="row">
                <form action="#" method="post">
                <div class="col-lg-3 col-md-6">
                    <div class="data">
                    <label>Search : </label>
                    <input class="btn btn-default dropdown-toggle" type="text" placeholder="" name="search">
                    </div>
                      
                     </div>
                     <div class="col-lg-3 col-md-3">
                          <div class="data">
                                 <input class="btn btn-default dropdown-toggle" type="submit" value="search" name="sub">
                               </div>
                      </div></div>
               
            
                </div>
            </div>
            </form>
        </div>
    </section>
    <section class="table_invoice">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Invoice Num</th>
                                    <th>Customer Name</th>
                                    <th>medcien name</th>
                                    <th>Data</th>
                                    <th>Total Amount</th>
                                    <th>Total Discount</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                    include ("include/conn.php");
                                    if(isset($_POST['sub'])){
                                    $search=$_POST['search'];
                                        $sql="SELECT * from invoices where CONCAT(medcien_name,CUSTOMER_name,INVOICE_DATE) LIKE '%$search%'";
                                        $query=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($query)>0){
                                       while($row=mysqli_fetch_assoc($query)){
                                           ?>
                                          <tr id="<?php echo $row['INVOICE_ID'];?>">
                                          <td><?php echo $row['invoice_nm']?></td>
                                          <td><?php echo $row['CUSTOMER_name']?></td>
                                          <td><?php echo $row['medcien_name']?></td>
                                          <td><?php echo $row['INVOICE_DATE']?></td>
                                          <td><?php echo $row['TOTAL_AMOUNT']?></td>
                                          <td><?php echo $row['TOTAL_DISCOUNT']?></td>
                                          <td>      <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                           <a href="updateinvoice.php?id=<?php echo $row['INVOICE_ID'];?>"> <button type="button" class="btn btn-success"><i class="fa fa-pencil "
                                    aria-hidden="true"></i>
                            </button></a>
                       </td>
                            </tr>
                                            <?php
                                       }
                                       }}else {   
                                ?>
                                <?php
                                        $sql="SELECT * FROM `invoices` ";
                                        $query=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_assoc($query)){
                                ?>
                                <tr id="<?php echo $row['INVOICE_ID'];?>">
                                    <td><?php echo $row['invoice_nm'];?></td>
                                    <td><?php echo $row['CUSTOMER_name'];?></td>
                                    <td><?php echo $row['medcien_name'];?></td>
                                    <td><?php echo $row['INVOICE_DATE'];?></td>
                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                                    <td><?php echo $row['TOTAL_DISCOUNT'];?></td>
                                    <td> 
                                              <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                          <a href="updateinvoice.php?id=<?php echo $row['INVOICE_ID'];?>">
                                          <button type="button" class="btn btn-success">
                                         <i class="fa fa-pencil "aria-hidden="true"></i>
                                           </button></a>
                                </td>
                                </tr>
                                        <?php }}?>
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
    <script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this invoice ?'))
        {
            $.ajax({
               url: 'manageinvoice.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("invoice removed successfully");  
               }
            });
        }
    });
</script>