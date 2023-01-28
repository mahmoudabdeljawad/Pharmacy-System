<?php 
session_start();
include "../include/conn.php";

$email=$_POST['email'];
$pass=$_POST['password'];
   $sql="SELECT email, password,empname,id FROM employee where email='$email' and password='$pass'";
   
   $query=mysqli_query($conn,$sql);
   $count1=mysqli_num_rows($query);
   if($count1==1){
      while ($row=mysqli_fetch_assoc($query)){
         $_SESSION['id']=$row['id'];
         $_SESSION['email']=$row['email'];
       $_SESSION['uname']= $row['empname'];
       $_SESSION['emp']='emp';
       header ("location:../dashboard.php");

      }

   }else if($count==0){
            $_SESSION['fail']=1;
      header ("location:../loginemp.php");}
   ?>
