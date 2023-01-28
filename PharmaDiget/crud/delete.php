<?php session_start();
include "../include/conn.php";
        if(isset($_GET['deleteid'])){
            $deleteid=$_GET['deleteid'];
            $sql="DELETE FROM `invoices` WHERE INVOICE_ID ='$deleteid'";
            $query=mysqli_query($conn,$sql);
            $_SESSION['delete']=1;
            header("location:../manageinvoice.php");
        }



        if(isset($_GET['deleteid1'])){
            $deleteid1=$_GET['deleteid1'];
            $sql1="DELETE FROM `customers` WHERE ID ='$deleteid1' ";
            $query1=mysqli_query($conn,$sql1);
            $_SESSION['delete']=1;
            header("location:../managecustomer.php");
        }


            if(isset($_GET['deleteid2'])){
                $deleteid2=$_GET['deleteid2'];
                $sql1="DELETE FROM `medicines_stock` WHERE ID ='$deleteid2'";
                $query1=mysqli_query($conn,$sql1);
                $_SESSION['delete']=1;
                header("location:../managemideicne.php");
            }
            if(isset($_GET['deleteid3'])){
                $deleteid3=$_GET['deleteid3'];
                $sql1="DELETE FROM `medicines_stock` WHERE ID ='$deleteid3'";
                $query1=mysqli_query($conn,$sql1);
                $_SESSION['delete']=1;
                header("location:../medstomanagemedStock.php");
            }
            
            if(isset($_GET['deleteid4'])){
                $deleteid4=$_GET['deleteid4'];
                $sql1="DELETE FROM `suppliers` WHERE ID ='$deleteid4'";
                $query1=mysqli_query($conn,$sql1);
                $_SESSION['delete']=1;
                header("location:../managesupplier.php");
            }
            if(isset($_GET['deleteid5'])){
                $deleteid5=$_GET['deleteid5'];
                $sql1="DELETE FROM `purchases` WHERE ID ='$deleteid5'";
                $query1=mysqli_query($conn,$sql1);
                $_SESSION['delete']=1;
                header("location:../ManagePurchase.php");
            }
            if(isset($_GET['deleteid6'])){
                $deleteid6=$_GET['deleteid6'];
                $sql1="DELETE FROM `employee` WHERE ID ='$deleteid6'";
                $query1=mysqli_query($conn,$sql1);
                $_SESSION['delete']=1;
                header("location:../SeqirityManage.php");
            }
            
            
            
            
?>