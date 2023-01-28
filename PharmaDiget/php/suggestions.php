<?php
$localhost="localhost";
$user="root";
$pass="";
$db="pharmacy";
$con=mysqli_connect($localhost,$user,$pass,$db) or die("cant conect to database");


  if($con) {
    if(isset($_GET['action']) && $_GET['action'] == "supplier")
      showSuggestions($con, "suppliers", "supplier");

    if(isset($_GET['action']) && $_GET['action'] == "customer")
      showSuggestions($con, "customers", "customer");

    if(isset($_GET['action']) && $_GET['action'] == "medicine")
      showSuggestions($con, "medicines", "medicine");

    if(isset($_GET['action']) && $_GET['action'] == "customers_address")
      getValue($con, $_GET['action'], "ADDRESS");

    if(isset($_GET['action']) && $_GET['action'] == "customers_contact_number")
      getValue($con, $_GET['action'], "CONTACT_NUMBER");
  }

  function showSuggestions($con, $table, $action) {
    $text = strtoupper($_GET["text"]);
    $query = "SELECT * FROM $table WHERE UPPER(NAME) LIKE '%$text%'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 0)
      echo '<div class="list-group-item list-group-item-action font-italic" style="padding: 5px;" disabled>No result...</div>';
    while($row = mysqli_fetch_array($result))
      echo '<input type="button" class="list-group-item list-group-item-action" value="'.$row['NAME'].'" style="padding: 5px;padding-right: 200px; outline: none;" onclick="suggestionClick(this.value, \''.$action.'\');">';
    //echo '<input type="button" class="list-group-item list-group-item-action bg-danger text-center text-light" style="padding: 5px;" value="Close" onclick="clearSuggestions(\''.$action.'\');">';
  }

  function getValue($con, $action, $column) {
    $name = $_GET['name'];
    $query = "SELECT * FROM customers WHERE NAME = '$name'";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result))
      echo $row[$column];
  }
?>
