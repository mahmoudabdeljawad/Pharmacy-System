<?php 
session_start();


if(isset($_SESSION['success'])){
    echo "<script>alert('Password Update Successfully');</script>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['success1'])){
    echo "<script>alert('Password does not match ');</script>";
    unset($_SESSION['success1']);
}
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php include_once 'css/ChangePasswordStyle.php';?>
    <script src="js/respond.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php
    include "include/sidnav.php";
    ?>
    <section class="change-pass text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Password">
                        <form action="crud/pswchange.php" method="post">
                           
                        <div>
            <div>
                <label>New Password : </label>
            </div>
            <input class="btn btn-default dropdown-toggle " type="password" placeholder="New Password" id='p1' name="p1" required >
        </div>
        <div>
            <div>
                <label>Confirm New Password : </label>
            </div>
            <input class="btn btn-default dropdown-toggle "  type="password" placeholder="Confirm New Password"  id='p2' name="p2" required>
        </div>
        <div style=" padding-top:10px ;color:red" id="status"> </div>
        <div style=" padding-top:2px ;color:red" id="status1"> </div>
        <div style="padding-top:2px;color:red" id="status2"> </div>
        <input class="btn btn-default dropdown-toggle" type="submit" id="btn" disabled value="update">

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
<script>
    var newPassword = document.getElementById('p1').value;

    p1.onfocus = function() {

        document.getElementById('status').innerHTML = 'password should be matched';
        document.getElementById('status1').innerHTML = 'password should be at least from 8 to 16';
        document.getElementById('status2').innerHTML = 'password should start with character and atleast one number '

    }
    p2.onkeyup = function v() {

        var btn = document.getElementById('btn').value
        var newPassword = document.getElementById('p1').value;
        var confirmnewPassword = document.getElementById('p2').value;
        var minNumberofChars = 8;
        var maxNumberofChars = 16;
        var regularExpression = /^[a-zA-Z0-9!@#$%^&*]{8,16}$/;

        if (newPassword != confirmnewPassword) {
            document.getElementById('status').innerHTML = 'password dose not match';
            return document.getElementById('btn').setAttribute("disabled", "");

        } else if (newPassword == confirmnewPassword) {
            document.getElementById('status').innerHTML = '';


        }
        if (confirmnewPassword.length < minNumberofChars || confirmnewPassword.length > maxNumberofChars) {
            document.getElementById('status1').innerHTML = 'password should be at least from 8 to 16';
            document.getElementById('btn').setAttribute("disabled", "");


        } else if (confirmnewPassword.length > 7 && confirmnewPassword.length < 16) {
            document.getElementById('status1').innerHTML = '';
            document.getElementById('btn').removeAttribute("disabled", "");

        }
        if (!regularExpression.test(newPassword)) {
            document.getElementById('btn').setAttribute("disabled", "");

            document.getElementById('status2').innerHTML = 'password should start with character and atleast one number '
        } else if (regularExpression.test(newPassword)) {
            document.getElementById('status2').innerHTML = ''
        }




    }
</script>