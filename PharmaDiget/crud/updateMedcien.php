<?php session_start();

include  "../include/conn.php";
$id=$_GET['id'];
$mname=$_POST['mname'];
$PACKING=$_POST['PACKING'];
$GENERIC_NAME=$_POST['GENERIC_NAME'];
$SUPPLIER_NAME=$_POST['SUPPLIER_NAME'];

        if(isset($_POST['sub'])){
            $sql="UPDATE medicines_stock set NAME='$mname',PACKING='$PACKING',GENERIC_NAME='$GENERIC_NAME',SUPPLIER_NAME='$SUPPLIER_NAME' where id='$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']=1;
            header("location:../managemideicne.php");
        }

?>