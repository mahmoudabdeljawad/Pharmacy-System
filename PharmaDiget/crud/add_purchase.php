<?php session_start();
 include('../include/conn.php');
 $suppname=$_POST['suppname'];
 $inv_num=$_POST['inv_num'];
 $date=$_POST['date'];
 $Mname=$_POST['Mname'];
 $gtotal=$_POST['gtotal'];
$state="PAID";
 $sql="INSERT into purchases (SUPPLIER_NAME,INVOICE_NUMBER,PURCHASE_DATE,TOTAL_AMOUNT,PAYMENT_STATUS) values('$suppname',' $inv_num',' $date',' $gtotal','$state')";
$query=mysqli_query($conn,$sql);
$_SESSION['success']=1;
header("location:../ManagePurchase.php")


?>