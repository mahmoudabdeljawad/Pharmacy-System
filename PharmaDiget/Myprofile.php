<?php session_start();
        $id=$_SESSION['id'];
include "include/myprof.php";
if(isset($_SESSION['success'])){
        echo "<script> alert('admin update successfuly'); </script>";
        unset($_SESSION['success']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/Myprofile.php';?>
    <script src="js/respond.min.js"></script>

    <title>Document</title>
</head>

<body>

    <?php
    include "include/sidnav.php";
    ?>
        <section class="sighn text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sighn-up">
                            
                            <?php if(isset($_SESSION['admin'])){ ?>
                                <div>

                                    <div>
                                        <label>UserName : </label>
                                    </div>
                                    <input class="btn btn-default dropdown-toggle " type=" text" placeholder="<?php echo $uname; ?>" disabled>
                                </div>
                                <div>
                                    <div>
                                        <label>Pharmacy Name : </label>
                                    </div>
                                    <input class="btn btn-default dropdown-toggle c1" type=" text" placeholder="<?php echo $phname;?>" disabled>
                                </div>
                                <div>
                                    <div>
                                        <label>Address : </label>
                                    </div>
                                    <input class="btn btn-default dropdown-toggle " type=" text " style="height:70px " placeholder="<?php echo $ph_address; ?> " disabled>
                                </div>
                                <div>
                                    <div>
                                        <label>Email : </label>
                                    </div>
                                    <input class="btn btn-default dropdown-toggle " type=" Email" placeholder="<?php echo $email; ?>" disabled>
                                </div>
                                <div>
                                    <div>
                                        <label>Contact Number : </label>
                                    </div>
                                    <input class="btn btn-default dropdown-toggle " type=" text" placeholder="<?php echo $con_nm; ?>" disabled>
                                </div>
                                <div>


                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Update</button>
                                    <?php }else if(isset($_SESSION['emp'])){
                                        echo "<h1>Emplyee cant edit his own information</h1>";
?>
<h4>
                                       <br><br> <br> <label>Employee Name : </label> <?php echo  $empname;?>
                                         <br> <label>Employee Email : </label> <?php echo  $empemail;?>
                                         <br> <label>Employee ID : </label> <?php echo  $empid;?></h4>
                                         <div id="paypal-button"></div>





                                   <?php } ?>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:yellow">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">My Profile Update</h4>
                                                </div>
                                                <div class="modal-body">


                                                    <form action="crud/updateadmin.php" method="post">
                                                        <div>
                                                            <div>
                                                                <label>UserName : </label>
                                                            </div>
                                                            <input class="btn btn-default dropdown-toggle " name='name' type=" text" value="<?php echo $uname; ?>" required>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <label>Pharmacy Name : </label>
                                                            </div>
                                                            <input class="btn btn-default dropdown-toggle " name='pname' type=" text" value="<?php echo $phname;?>" required>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <label>Address : </label>
                                                            </div>
                                                            <input class="btn btn-default dropdown-toggle "  name ='address'type=" text " style="height:70px " value="<?php echo $ph_address; ?> " required>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <label>Email : </label>
                                                            </div>
                                                            <input class="btn btn-default dropdown-toggle " name='email' type=" Email" value="<?php echo $email; ?>" required>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <label>Contact Number : </label>
                                                            </div>
                                                            <input class="btn btn-default dropdown-toggle " name='phone' type=" text" value="<?php echo $con_nm; ?>"required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="sub" class="btn btn-primary">Update</button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                        </div>



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
<style>

</style>