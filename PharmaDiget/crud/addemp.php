<?php
session_start();
include ("../include/conn.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$empid=$_POST['empid'];
$empname=$_POST['empname'];
$sql="SELECT * from employee where email='$email'";
$query=mysqli_query($conn,$sql);
$count=mysqli_num_rows($query);
if($count==0){
$sql="INSERT INTO employee (name,email,password,id,empname) values ('$name','$email','$password','$empid','$empname')";
$query=mysqli_query($conn,$sql);
$_SESSION['success']=1;
header("location:../SeqirityManage.php");}
else{
     $_SESSION['found']=1;
header("location:../SequrityAdd.php");
}


?>