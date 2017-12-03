<?php
session_start();

if(isset($_SESSION['park_id']) ) {
  unset($_SESSION['park_id']);
  unset($_SESSION['Parking_Price']);
}

header("Location: MyCart.php");

 ?>
