<?php session_start();

    include "../include/conn.php";
    print_r($_POST);
    $medcien_name=$_POST['medcien_name'];
    $GENERIC_NAME=$_POST['GENERIC_NAME'];
    $PACKING=$_POST['PACKING'];
    $BATCH_ID=$_POST['BATCH_ID'];
    $EXPIRY_DATE=$_POST['EXPIRY_DATE'];
    $QUANTITY=$_POST['QUANTITY'];
    $MRP=$_POST['MRP'];
    $suppliers_name=$_POST['suppliers_name'];
   $sql="INSERT into medicines_stock (NAME,GENERIC_NAME,PACKING,BATCH_ID,EXPIRY_DATE,QUANTITY,MRP,SUPPLIER_NAME) 
   values(' $medcien_name','$GENERIC_NAME','$PACKING','$BATCH_ID','$EXPIRY_DATE','$QUANTITY','$MRP','$suppliers_name')";
   $query=mysqli_query($conn,$sql);
   $_SESSION['success']=1;

   header("location:../managemideicne.php")
    

?>