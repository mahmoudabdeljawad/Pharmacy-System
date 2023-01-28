<?php 
include "conn.php";

$query = "SELECT * FROM invoices";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

$query1 = "SELECT * FROM customers";
$result1 = mysqli_query($conn, $query1);
$count1 = mysqli_num_rows($result1);

$query2 = "SELECT * FROM suppliers";
$result2 = mysqli_query($conn, $query2);
$count2 = mysqli_num_rows($result2);

$query3 = "SELECT * FROM medicines_stock";
$result3 = mysqli_query($conn, $query3);
$count3 = mysqli_num_rows($result3);


$query4 = "SELECT * FROM  medicines_stock WHERE QUANTITY = 0";
$result4 = mysqli_query($conn, $query4);
$count4 = mysqli_num_rows($result4);


$date= date("Y-m-d");
$query6="SELECT * from medicines_stock where EXPIRY_DATE <= '$date' ";

$result6 = mysqli_query($conn, $query6);
$count6=mysqli_num_rows($result6);
               
                 
                
                

?>