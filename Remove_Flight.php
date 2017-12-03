<?php
session_start();

if(isset($_SESSION['flight_number']) ) {
  unset($_SESSION['flight_number']);
  unset($_SESSION['Flight_Price']);
}

header("Location: MyCart.php");

 ?>
