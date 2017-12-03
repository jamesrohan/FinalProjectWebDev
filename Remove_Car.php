<?php
session_start();

if(isset($_SESSION['car_id']) ) {
  unset($_SESSION['car_id']);
  unset($_SESSION['Car_Price']);
}

header("Location: MyCart.php");

 ?>
