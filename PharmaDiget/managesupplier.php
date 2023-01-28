<?php 
 session_start();
 if(isset($_SESSION['success'])){
    echo "<script>alert('New Supplyier Add Successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('Supplyier Update Successfully');</script>";
    unset($_SESSION['success1']);
}
if(isset($_SESSION['delete'])){
    echo "<script>alert('supplyier Deleted');</script>";
    unset($_SESSION['delete']);
}
if(isset($_GET['id'])){
    include "include/conn.php";
    $deleteid=$_GET['id'];
    $sql1="DELETE FROM `suppliers` WHERE ID ='$deleteid'";
    $query1=mysqli_query($conn,$sql1);
  
   
}
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/managesupplierstyle.php';?>
    <script src="js/respond.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include "include/sidnav.php";
    ?>
 <section class="manage-supplier">
        <div class="container border-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="managament">
                        <i class="fa fa-users" aria-hidden="true"> <span> Manage </span> Supplier</i>
                        <div class="h5">Manage Existing Supplier </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
 <form action="managesupplier.php" method="POST">
 <section class="search-supplier">
        <div class="container under">
            <div class="row">
                <div class="col-lg-3">
                    <div class="search_">
                            <div class=" form-inline">
                                <label for="search">Search :</label>
                                <input type="text" class="form-control " placeholder="Search" name="search" >
                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="search_">
                            <div class=" form-inline">
                                <input type="submit" class="form-control" name="sub" placeholder="Search"  >
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <section class="Supplieres">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Supplier-table">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th> ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Addres's</th>
                                    <th>Action</th>
                                </tr>
                               
                                    <?php 
                                         include "include/conn.php";
                                        if(isset($_POST['search'])){
                                            $search=$_POST['search'];
                                            $sql="SELECT * FROM suppliers where CONCAT(NAME,EMAIL) like '%$search%'";
                                            $query=mysqli_query($conn,$sql);
                                                while($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                   <tr id="<?php echo $row['ID']?>">
                                            <td><?php echo $row['ID']?></td>
                                            <td><?php echo $row['NAME']?></td>
                                            <td><?php echo $row['EMAIL']?></td>
                                            <td><?php echo $row['CONTACT_NUMBER']?></td>
                                            <td><?php echo $row['ADDRESS'];?></td>
                                            <td> <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                   <a href="updatesupplyiers.php?id=<?php echo $row['ID']; ?>"> <button type="button" class="btn btn-success" >
                                           <i class="fa fa-pencil " aria-hidden="true"></i>
                                        </button></a>
                                            </td>
                                            </tr>
                                            <?php
                                                        }}
                                                        else{  ?>
                                           
                                          <?php 
                                            include "include/conn.php";     
                                    $sql="SELECT * FROM suppliers";
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){
                                            ?>
                                            <tr id="<?php echo $row['ID']?>">
                                    <td><?php echo $row['ID']?></td>
                                    <td><?php echo $row['NAME']?></td>
                                    <td><?php echo $row['EMAIL']?></td>
                                    <td><?php echo $row['CONTACT_NUMBER']?></td>
                                    <td><?php echo $row['ADDRESS'];?></td>
                                    <td> <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                   <a href="updatesupplyiers.php?id=<?php echo $row['ID']; ?>"> <button type="button" class="btn btn-success" >
                                           <i class="fa fa-pencil " aria-hidden="true"></i>
                                        </button></a>
                                            </td>
                                    </tr>
                                    <?php }} ?>
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
               url: 'managesupplier.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("supplyier removed successfully");  
               }
            });
        }
    });
</script>