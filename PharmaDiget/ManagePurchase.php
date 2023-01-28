<?php 
 session_start();

if(isset($_SESSION['success'])){
    echo "<script>alert('New Purchase add successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('Purchase Update successfully');</script>";
    unset($_SESSION['success1']);
}
if(isset($_GET['id'])){
    include "include/conn.php";
    $deleteid=$_GET['id'];
    $sql="DELETE FROM `purchases` WHERE ID ='$deleteid'";
    $query=mysqli_query($conn,$sql);

}
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/ManagePurchaseStyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
</head>


<body>
<?php
    include "include/sidnav.php";
    ?>

<section class="ManageStock-titel">
        <div class="container border">
            <div class="row">
                <div class="col-lg-6">
                    <div class="Manage-Stocklogo">
                        <i class="fa fa-shopping-bag" aria-hidden="true"> <span> Manage </span> Purchase</i>
                        <div class="h5">Manage Exisitng Purchase</div>
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
                     <label>Search : </label>
                     <input type="text" class="btn btn-default dropdown-toggle" name="search" placeholder=" By Medicine Name , Generic Name Or Supplier Name" id="ginirc";>
                </div>
            </div>

            
            
            <div class="col-lg-1">
                <div class="search ">
                     <button type="submit" class="btn btn-">search </button>
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
                                    <th>Purchase ID  </th>
                                    <th>Supplier Name</th>
                                    <th>Invoice Number</th>
                                    <th>Purchase Date</th>
                                    <th>Price JD</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                               
                                </tr>
                                    <?php include("include/conn.php");
                                    if(isset($_POST['search'])){
                                        $search=$_POST['search'];
                                        $sql="SELECT * from purchases where CONCAT(SUPPLIER_NAME,INVOICE_NUMBER,PURCHASE_DATE) LIKE '%$search%'";
                                        $query=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr id="<?php echo $row['ID'] ?>">
                                            <td><?php echo $row['ID'];?></td>
                                            <td><?php echo $row['SUPPLIER_NAME'];?></td>
                                            <td><?php echo $row['INVOICE_NUMBER'];?></td>
                                            <td><?php echo $row['PURCHASE_DATE'];?></td>
                                            <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                                            <td><?php echo $row['PAYMENT_STATUS'];?></td>
                                            <td>
                                            <a href="updatepurchase.php?id=<?php echo $row['ID'] ; ?>"> 
                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil "aria-hidden="true"></i>
                                        </button> </a>
                                        <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
        
                                            </td>
                                            </tr>
                                            <?php }?>


                                        <?php

                                    }else{
                                    $sql="SELECT * from purchases";
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr id="<?php echo $row['ID'] ?>">
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['SUPPLIER_NAME'];?></td>
                                    <td><?php echo $row['INVOICE_NUMBER'];?></td>
                                    <td><?php echo $row['PURCHASE_DATE'];?></td>
                                    <td><?php echo $row['TOTAL_AMOUNT'];?></td>
                                    <td><?php echo $row['PAYMENT_STATUS'];?></td>                                   
                                    <td>
                                    <a href="updatepurchase.php?id=<?php echo $row['ID'] ; ?>"> 
                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil "aria-hidden="true"></i>
                                        </button> </a>

                                        <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>

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
        <script src="js/bootstrap.min.js"></script><s></s>
</body>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this invoice ?'))
        {
            $.ajax({
               url: 'ManagePurchase.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("purchases removed successfully");  
               }
            });
        }
    });
</script>