<?php
session_start();
include  "../include/conn.php";
$id=$_POST['id'];
$name=$_POST['cname'];
$cnom=$_POST['cno'];
$address=$_POST['address'];
$drname=$_POST['dname'];
$draddress=$_POST['daddress'];
        if(isset($_POST['update'])){
            $sql="UPDATE customers set NAME='$name',CONTACT_NUMBER='$cnom',ADDRESS='$address',
            DOCTOR_NAME='$drname',DOCTOR_ADDRESS='$draddress' where id='$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']=1;
            header("location:../managecustomer.php");
        }

?>