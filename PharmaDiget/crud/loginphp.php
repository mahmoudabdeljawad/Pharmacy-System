<?php
session_start();

include "../include/conn.php";
session_start();
$email=$_POST['email'];
$pass=md5($_POST['password']);
if(isset($_POST['sub'])){
$query="SELECT email, password,username,id FROM admin where email='$email' and password='$pass'";

$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count==1){
   while ($row=mysqli_fetch_assoc($result)){
      $_SESSION['id']=$row['id'];
    $_SESSION['uname']= $row['username'];
    $_SESSION['email']=$row['email'];
    $_SESSION['admin']='admin';
    header ("location:../dashboard.php");
   }
    
}
else if($count==0){
   $_SESSION['fail']=1;
header ("location:../index.php");}

}

?>