<?php  session_start();

    include "../include/conn.php";
    $NAME=$_POST['NAME'];
    $EMAIL=$_POST['EMAIL'];
    $CONTACT_NUMBER=$_POST['CONTACT_NUMBER'];
    $ADDRESS=$_POST['ADDRESS'];
    $sql="INSERT into suppliers (NAME,EMAIL,CONTACT_NUMBER,ADDRESS) values ('$NAME','$EMAIL','$CONTACT_NUMBER','$ADDRESS')";
    $query=mysqli_query($conn,$sql);
    $_SESSION['success']=1;
    header ("location:../managesupplier.php")


?>


