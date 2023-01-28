<?php 
 session_start();

if(isset($_SESSION['success'])){
    echo "<script>alert('New medcien add successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('Medcien Update successfully');</script>";
    unset($_SESSION['success1']);
}
if(isset($_SESSION['delete'])){
    echo "<script>alert('medcien Deleted');</script>";
    unset($_SESSION['delete']);
}
if(isset($_GET['id'])){
    include "include/conn.php";

    $deleteid2=$_GET['id'];
    $sql1="DELETE FROM `medicines_stock` WHERE ID ='$deleteid2'";
    $query1=mysqli_query($conn,$sql1);
    
    
}
 ?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/managecustomer.php';?>
    <?php include_once 'css/managemideicnestyle.php';?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
</head>
<body>
    <?php
    include "include/sidnav.php";
    ?>
<section class="manage_medicine">
        <div class="container border-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="manage-title">
                        <i class="fa fa-shopping-bag " aria-hidden="true"> <span> Manage </span> Medicine</i>
                        <div class="h5">Manage Existing Medicne </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
 <section class="invoice_data text-center">
        <div class="container border_under">
            <div class="row">
               
            <div class="col-lg-4">
                        <form action="#" method="post">

                            <div class="search">
                                <label for="#d">search:</label>
                                <input type="text" class="btn btn-default dropdown-toggle" id=""d placeholder=" By Medicine Name , Generic Name Or Supplier Name" id="ginirc" name="search">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="search " style="float:left;">
                                <button type="submit" name="sub" class="btn ">search</button>
                            </div>
                        </div>
                        </form>
        </div>
    </section>
           <section class="customer">
           <div class="container">
               <div class="row">
                <div class="col-lg-12">
                    <div class="customer-table">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>id.</th>
                                    <th>Medicine </th>
                                    <th>Packing</th>
                                    <th>Genric Name</th>
                                    <th>Supplier Name</th>
                                    <th>Action</th>
                                </tr>
                               
                                    <?php
                                if(isset($_POST['sub'])){
                                             include "include/conn.php";
                                             $search=$_POST['search'];
                                             $sql="SELECT * from medicines_stock where CONCAT(GENERIC_NAME,SUPPLIER_NAME,NAME) LIKE '%$search%'";
                                             $query=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($query)){
                                            ?>
                                             <tr id="<?php echo $row['ID']?>">
                                            <td>
                                                <?php echo $row['ID']?>
                                            </td>
                                            <td>
                                                <?php echo $row['NAME']?>
                                            </td>
                                            <td>
                                                <?php echo $row['PACKING']?>
                                            </td>
                                            <td>
                                                <?php echo $row['GENERIC_NAME']?>
                                            </td>
                                            <td>
                                                <?php echo $row['SUPPLIER_NAME']?>
                                            </td>

                                            <td>   <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                        <a href="updatemedacien.php?id=<?php echo $row['ID'] ; ?>"> <button type="button" class="btn btn-success"><i class="fa fa-pencil "aria-hidden="true"></i>
                                        </button> </a></td>
                                        </tr>
                                        <?php
                                    }} else {
                                    ?>
                                    <?php 
                                     include "include/conn.php";

                                    $sql="SELECT * FROM medicines_stock";
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr id="<?php echo $row['ID']?>">
                                    <td><?php echo $row['ID']?></td>
                                    <td><?php echo $row['NAME']?></td>
                                    <td><?php echo $row['PACKING']?></td>
                                    <td><?php echo $row['GENERIC_NAME']?></td>
                                    <td><?php echo $row['SUPPLIER_NAME']?></td>

                                    <td>   <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                      
                                        <a href="updatemedacien.php?id=<?php echo $row['ID'] ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil "aria-hidden="true"></i>
                                        </button> </a>
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


        if(confirm('Are you sure to remove this medcien ?'))
        {
            $.ajax({
               url: 'managemideicne.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("medcien removed successfully");  
               }
            });
        }
    });
</script>