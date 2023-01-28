<?php session_start();
if(isset($_SESSION['found'])){
echo "<script>alert('email already used'); </script>";
unset($_SESSION['found']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/SequrityAddStyle.php';?>
    <script src="js/respond.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php
    include "include/sidnav.php";
    ?>
    <section class="Add-employee text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ADD">
                        <form action="crud/addemp.php" method="post">
                            <div>
                                <div>
                                    <label> Username: </label>
                                </div> 
                                <input class="btn btn-default dropdown-toggle " type="text" placeholder="Name" name="name" required>
                            </div>
                            <div>
                              
                            
                            <div>
                                <div>
                                    <label> Email : </label>
                                </div>
                                <input class="btn btn-default dropdown-toggle " type="Email" placeholder="Email" name="email" required                                    >
                            </div>
                            <div>
                                <div>
                                    <label>Password : </label>
                                </div>
                                <input class="btn btn-default dropdown-toggle " type="Password" placeholder=" Password" name="password" required                                    >
                            </div>

                            <div>
                                <div>
                                    <label>Employee Id : </label>
                                </div>
                                <input class="btn btn-default dropdown-toggle " type="Text" placeholder="ID" name="empid" required                                    >
                            </div>

                            <div>
                                <div>
                                    <label>Employee Name : </label>
                                </div>
                                <input class="btn btn-default dropdown-toggle " type="Text" placeholder=" Employee Name" name="empname" required                                    >
                            </div>

                           <button type="submit" value="add" name="sub" class="btn btn-success"> add </button>


                        </form>

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