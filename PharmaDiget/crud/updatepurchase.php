<?php session_start();

include  "../include/conn.php";
$id=$_POST['id'];
$suppname=$_POST['suppname'];
$inv_num=$_POST['inv_num'];
$date=$_POST['date'];
$gtotal=$_POST['gtotal'];
$state="PAID";

        if(isset($_POST['update'])){
            
            $sql="UPDATE  purchases set SUPPLIER_NAME='$suppname',INVOICE_NUMBER='$inv_num',PURCHASE_DATE='$date',TOTAL_AMOUNT='$gtotal' where id= '$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']=1;
            header("location:../ManagePurchase.php");
        }

?>