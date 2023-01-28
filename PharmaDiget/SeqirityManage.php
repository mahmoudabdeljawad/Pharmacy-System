<?php
session_start();
if(isset($_SESSION['success'])){
    echo "<script>alert('New employee add successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_GET['id'])){
    include "include/conn.php";
    $deleteid=$_GET['id'];
    $sql="DELETE FROM `employee` WHERE ID ='$deleteid'";
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
        <?php include_once 'css/SequrityManageStyle.php';?>

        <script src="js/respond.min.js"></script>
    </head>

    <body>
        <?php
    include "include/sidnav.php";
    ?>
            <section class="Emplo-manage">
                <div class="container border_under">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="manage">
                                <i class="fa fa-id-card " aria-hidden="true"> <span> Manage </span> Employees</i>
                                <div class="h5">Manage Existing Employees </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <form action="#" method="post">
                <section class="Employee_data text-center">
                    <div class="container border_under">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="data">
                                    <label>Search : </label>
                                    <input class="btn btn-default dropdown-toggle" type="text" placeholder="" name="search">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="data">

                                    <input class="btn btn-default dropdown-toggle" type="submit" value="search" name="sub">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
            <section class="table_EMPLOYEE">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Employee Num</th>
                                            <th>Employee Name</th>
                                            <th>Employee Password</th>
                                            <th>Employee Email </th>
                                            <th>Action</th>
                                        </tr>
                                        <?php
                                include "include/conn.php";
                                if(isset($_POST['sub'])){
                                    $search=$_POST['search'];
                                    $sql="SELECT * FROM employee where CONCAT(id,empname,email) like '%$search%'";
                                    $query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($query)){  
                                        ?>
                                            <tr id="<?php echo $row['id']; ?> ">
                                                <th>
                                                    <?php echo $row['id']; ?> </th>
                                                <th>
                                                    <?php echo $row['empname']; ?> </th>
                                                <th>
                                                    <?php echo $row['password']; ?> </th>
                                                <th>
                                                    <?php echo $row['email']; ?> </th>
                                                    <td>
                                                    <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                    <a href="updatesecuritydata.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-success">
                                       <i class="fa fa-pencil " aria-hidden="true"></i>
                                    </button></a>
                                                </td>
                                            
                                            <?php } }else{ ?></tr>
                                            <?php
                                        
                                $sql="SELECT * FROM employee";
                                $query=mysqli_query($conn,$sql);
                                      while($row=mysqli_fetch_assoc($query)){  
                                            ?>
                                                <tr id="<?php echo $row['id']; ?> ">
                                                    <th>
                                                        <?php echo $row['id']; ?> </th>
                                                    <th>
                                                        <?php echo $row['empname']; ?> </th>
                                                    <th>
                                                        <?php echo $row['password']; ?> </th>
                                                    <th>
                                                        <?php echo $row['email']; ?> </th>
                                                        <td>
                                                        <button class="btn btn-danger  remove"> <i class="fa fa-trash "
                                                aria-hidden="true"></i></button>
                                    <a href="updatesecuritydata.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-success">
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
            </div>
            <!-- /#wrapper -->
            <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script><s></s>



    </body>
    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this invoice ?'))
        {
            $.ajax({
               url: 'SeqirityManage.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("purchases removed successfully");  
                    location.reload();
               }
            });
        }
    });
</script>