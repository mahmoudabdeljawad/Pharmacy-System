<?php
session_start();
include  "../include/conn.php";
$id1=$_GET['id'];
$cname=$_POST['a1'];
$mname=$_POST['a2'];
$date=$_POST['a3'];
$totala=$_POST['a4'];
$totald=$_POST['a5'];
        if(isset($_POST['sub'])){
            $sql="UPDATE invoices set CUSTOMER_name='$cname',
            medcien_name='$mname',INVOICE_DATE='$date',
            TOTAL_AMOUNT='$totala',
            TOTAL_DISCOUNT='$totald' where INVOICE_ID='$id1'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']='1';
        header("location:../manageinvoice.php");}


?>