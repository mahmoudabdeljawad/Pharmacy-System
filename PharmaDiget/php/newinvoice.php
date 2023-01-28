<?php
session_start();

$localhost="localhost";
$user="root";
$pass="";
$db="pharmacy";
$conn=mysqli_connect($localhost,$user,$pass,$db) or die("cant conect to database");
if(isset($_POST['addinvoice'])){
$customer_name=$_POST['cn'];
$invoice_nm=$_POST['invoice_number'];
$date=$_POST['date'];
$medcien_name=$_POST['medicine_name'];
$total_net=$_POST['nt'];
$total_discount=$_POST['td'];

$sql="INSERT INTO `invoices`(`invoice_nm`, `medcien_name`, `INVOICE_DATE`, `CUSTOMER_name`, `TOTAL_AMOUNT`, `TOTAL_DISCOUNT`)
 VALUES ('$invoice_nm','$medcien_name','$date','$customer_name','$total_net','$total_discount')";
$query=mysqli_query($conn,$sql);
$_SESSION['success']='1';


header("location:../manageinvoice.php");

}
else if(isset($_POST['newcustomer'])){
    $name=$_POST["cname"];
$addres=$_POST["cno"];
$contact=$_POST["caddress"];
$doctor=$_POST["DoctorsName"];
$doctoraddres=$_POST["daddress"];
$sql="INSERT into customers (NAME,CONTACT_NUMBER,ADDRESS,DOCTOR_NAME,DOCTOR_ADDRESS)
 values('$name','$contact','$addres','$doctor','$doctoraddres')";
$query=mysqli_query($conn,$sql);
header("location:../managecustomer.php");
$_SESSION['success'];
}

?>