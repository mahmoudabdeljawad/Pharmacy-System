<?php
session_start();
include  "../include/conn.php";
$id=$_POST['id'];
$mname=$_POST['name'];
$empname=$_POST['empname'];
$email=$_POST['email'];

        if(isset($_POST['sub'])){
            $sql="UPDATE employee set NAME='$mname',empname='$empname',email='$email' where id='$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']=1;
            header("location:../SeqirityManage.php");
        }

?>