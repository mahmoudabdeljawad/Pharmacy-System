<?php session_start();
include  "../include/conn.php";
$id=$_GET['id'];
$NAME=$_POST['NAME'];
$PACKING=$_POST['PACKING'];
$GENERIC_NAME=$_POST['GENERIC_NAME'];
$SUPPLIER_NAME=$_POST['SUPPLIER_NAME'];
$BATCH_ID=$_POST['BATCH_ID'];
$QUANTITY=$_POST['QUANTITY'];
$EXPIRY_DATE=$_POST['EXPIRY_DATE'];
$price=$_POST['price'];
        if(isset($_POST['update'])){
            $sql="UPDATE medicines_stock set NAME='$NAME',PACKING='$PACKING',GENERIC_NAME='$GENERIC_NAME',
            SUPPLIER_NAME='$SUPPLIER_NAME',BATCH_ID='$BATCH_ID',QUANTITY='$QUANTITY',EXPIRY_DATE='$EXPIRY_DATE',MRP='$price' where id='$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success2']=1;
            header("location:../managemedStock.php");
        }

?>
