<?php
session_start();
include "../include/conn.php";
$newpassword=$_POST['p1'];
$newpassword1=$_POST['p2'];
$email=$_SESSION['email'];

if(isset($_SESSION['admin'])){
    if($newpassword==$newpassword1){
        $newpassword=md5($newpassword);
    $sql="UPDATE admin set password ='$newpassword' where email='$email'";
    $query=mysqli_query($conn,$sql);
        header("location:../ChangePassword.php");
        $_SESSION['success']=1;

    }
    else{ $_SESSION['success1']=1;
    header("location:../ChangePassword.php");}

}else if(isset($_SESSION['emp'])){
    if($newpassword==$newpassword1){
        $sql="UPDATE employee set password ='$newpassword' where email='$email'";
        $query=mysqli_query($conn,$sql);
            header("location:../ChangePassword.php");
            $_SESSION['success']=1;
    
        }
        else $_SESSION['success1']=1;
        header("location:../ChangePassword.php");



}



?>