<?php 
 session_start();

if(isset($_SESSION['success'])){
    echo "<script>alert('New customer add successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('customer Update successfully');</script>";
    unset($_SESSION['success1']);
}
// alert delete under ground
if(isset($_GET['id']))
{
    include 'include/conn.php';
    $deleteid1=$_GET['id'];
    $sql1="DELETE FROM `customers` WHERE ID ='$deleteid1' ";
            $query1=mysqli_query($conn,$sql1);
	 echo 'Deleted successfully.';
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/respond.min.js"></script>
</head>

<body>
    <?php
        include "include/sidnav.php";
    ?>
        <section class="manage">
            <div class="container under">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="manage-customer">
                            <i class="fa fa-handshake-o" aria-hidden="true"> <span> Manage </span> Customer</i>
                            <div class="h5">Manage Existing Customer </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="search">
            <div class="container under">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="search-input">
                            <form action="#" method="post">
                                <div class=" form-inline">
                                    <label for="search">Search :</label>
                                    <input type="text" class="form-control " placeholder="Search" id="Search" name="search">
                            </div>   
                            </div>
</div>
                              <div class="col-lg-3">
                              <div class=" form-inline">

                                        <input type="submit" class="form-control " placeholder="Search" value="search" id="Search" name="submit">
                                  </div></div>
                        </form>
                    </div>
                </div>
            </div>
           
    </section>
    <section class="customer ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="customer-table ">
                        <table class="table table-striped ">
                            <tbody>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>Doctor's Name</th>
                                    <th>Doctor's Address</th>
                                    <th>Action</th>
                                </tr>
                                
                                    <?php include "include/conn.php ";
                                    if(isset($_POST['submit'])){
                                        $SEARCH=$_POST['search'];
                                            $sql="SELECT * from customers where CONCAT(NAME,CONTACT_NUMBER,DOCTOR_NAME) LIKE '%$SEARCH%'";
                                            $query=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($query)){
                                                ?>
                                    <tr id="<?php echo $row['ID'] ?>">
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['NAME']; ?></td>
                                    <td><?php echo $row['CONTACT_NUMBER']; ?></td>
                                    <td><?php echo $row['ADDRESS']; ?></td>
                                    <td><?php echo $row['DOCTOR_NAME']; ?></td>
                                    <td><?php echo $row['DOCTOR_ADDRESS']; ?></td>
                                    <td>
                                    <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                    <a href="updatecustomer.php?id=<?php echo $row['ID']; ?>">
                                    <button type="button" class="btn btn-success" >
                                           <i class="fa fa-pencil " aria-hidden="true"></i>
                                        </button></a>
                                    </td>
                                    </tr> <?php }?>
                                                    <?php
                                    }else{
                                         include "include/conn.php ";
                                    $sql="select * from customers " ;
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){
                                        ?>
                                           <tr id="<?php echo $row['ID'];  ?>">   
                                           
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['NAME']; ?></td>
                                    <td><?php echo $row['CONTACT_NUMBER']; ?></td>
                                    <td><?php echo $row['ADDRESS']; ?></td>
                                    <td><?php echo $row['DOCTOR_NAME']; ?></td>
                                    <td><?php echo $row['DOCTOR_ADDRESS']; ?></td>
                                    <td>
                                        
                                    <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>

                                    <a href="updatecustomer.php?id=<?php echo $row['ID']; ?>"> <button type="button" class="btn btn-success" >
                                           <i class="fa fa-pencil " aria-hidden="true"></i>
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
        </div>
        <!-- /#wrapper -->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script><s></s>

      
</body>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this customer ?'))
        {
            $.ajax({
               url: 'managecustomer.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Customer removed successfully");  
               }
            });
        }
    });
</script>