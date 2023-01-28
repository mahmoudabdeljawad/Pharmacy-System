<?php 
 session_start();
 if(isset($_SESSION['fail'])){
     echo "<script> alert('wrong email or password'); </script>";
     unset($_SESSION['fail']);
 }
 
 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include_once 'css/login.php';?>

    <link rel="stylesheet" href="css/font-awesome.min.css">
  
    <script src="js/respond.min.js"></script>


    <title>Document</title>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="image/phar.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBX">
                <h2>Login</h2><span> as employee</span>
                <form action="crud/emplogin.php" method="post">
                    <div class="inputBX">
                        <span>Email</span>
                        <input type="Text" name="email" required>
                    </div>
                    <div class="inputBX">
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember me</label>
                    </div>
                    <div class="inputBX">
                        <input type="submit" value="sign in" name="sub">
                    </div>
                    <div class="inputBX">
                        <p>login as admin ? <a href="index.php">Admin login</a></p>
                    </div>
                </form>
                
            
            </div>
        </div>
    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>