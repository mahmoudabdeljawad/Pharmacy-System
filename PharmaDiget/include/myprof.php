<?php
@session_start();
include "conn.php";
if(isset($_SESSION['admin'])){
$query="SELECT id,username,ph_name,address,email,contact_nm FROM admin where id='".$id."' ";

$result=mysqli_query($conn,$query);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $uname=$row['username'];
        $phname=$row['ph_name'];
        $ph_address=$row['address'];
        $email=$row['email'];
        $con_nm=$row['contact_nm'];

    }
}}
else if(isset($_SESSION['emp'])){
    $query="SELECT * FROM employee where id='".$id."' ";
    
    $result=mysqli_query($conn,$query);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $uname=$row['name'];
            $empname=$row['empname'];
            $empemail=$row['email'];
            $empid=$row["id"];
         
    
        }
    }}

?>