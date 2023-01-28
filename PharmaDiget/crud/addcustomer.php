<?php 
session_start();
 include('../include/conn.php');
 if(isset($_POST['sub'])){
$name=$_POST["cname"];
$addres=$_POST["cno"];
$contact=$_POST["caddress"];
$doctor=$_POST["DoctorsName"];
$doctoraddres=$_POST["daddress"];
$sql="INSERT into customers (NAME,CONTACT_NUMBER,ADDRESS,DOCTOR_NAME,DOCTOR_ADDRESS)
 values('$name','$contact','$addres','$doctor','$doctoraddres')";
$query=mysqli_query($conn,$sql);
$_SESSION['success']=1;
header("location:../managecustomer.php");

}
?>
