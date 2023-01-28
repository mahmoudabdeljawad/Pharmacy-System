<?php session_start();

include  "../include/conn.php";
$id=$_GET['id'];
$NAME=$_POST['NAME'];
$EMAIL=$_POST['EMAIL'];
$CONTACT_NUMBER=$_POST['CONTACT_NUMBER'];
$ADDRESS=$_POST['ADDRESS'];

        if(isset($_POST['sub'])){
            
            $sql="UPDATE suppliers set NAME='$NAME',EMAIL='$EMAIL',CONTACT_NUMBER='$CONTACT_NUMBER',ADDRESS='$ADDRESS' where id= '$id'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['success1']=1;
            header("location:../managesupplier.php");
        }

?>