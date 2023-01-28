<?php 
session_start();
$id=$_SESSION['id'];

include  "../include/conn.php";
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pname=$_POST['pname'];

$query="UPDATE admin set username='$name',
  ph_name='$pname',address='$address',email='$email',contact_nm ='$phone' where id=".$id."";
$result=mysqli_query($conn,$query);
$_SESSION['success']=1;
unset($_SESSION['uname']);
unset($_SESSION['email']);

$_SESSION['uname']=$name;
$_SESSION['email']=$email;
$_SESSION['success']=1;

header("location:../Myprofile.php")

?>