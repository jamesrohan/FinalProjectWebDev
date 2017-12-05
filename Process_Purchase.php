<html>
<head>
    <link rel="stylesheet" href="booking.css" type="text/css">
</head>



<body>

  <?php
  session_start();
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "finalproject";



  $r = mysqli_connect($host, $user, $pass);




  if (!$r) {
      //echo "Could not connect to server\n";
      trigger_error(mysqli_error($r), E_USER_ERROR);
  } else {
    //  echo "Connection established\n";
  }

  $r2 = mysqli_select_db($r, $db);

  if (!$r2) {
      //echo "Cannot select database\n";
      trigger_error(mysqli_error($r), E_USER_ERROR);
  } else {
    //  echo "Database selected\n";
  }

















  if (isset($_SESSION['flight_number'])) {


      $queryFlightPurchase = "INSERT INTO bookings_flights
                              (	User_FK_ID,	Schedule_FK_Flight,	Credit_Card	,Card_Name,
                                Card_Security_Code,	Card_Exp_Date,	Card_Shipping_Address,
                                Card_Billing_Address,	Card_PhoneNum)
                              VALUES ('$_SESSION[login_user]', '$_SESSION[flight_number]',
                                \"'$_POST[cardNum]'\", \"'$_POST[nameOnCard]'\", '$_POST[securitycode]',
                                \"'$_POST[ExpiryDate]'\", \"'$_POST[CardAddress]'\",
                                \"'$_POST[BillingAddress]'\", \"'$_POST[PhoneNumber]'\" )";


    $rs = mysqli_query($r, $queryFlightPurchase);
      if(!$rs){
      //  echo "Could not execute query: $queryFlightPurchase";
      echo '<h1><br>Flight Purchase Not Sucessfull</h1>';
        trigger_error(mysqli_error($r), E_USER_ERROR);
      }else {
          unset($_SESSION['flight_number']);
          unset($_SESSION['Flight_Price']);
          //echo "<br>Query: $queryFlightPurchase executed\n";
          echo '<h1><br>Flight Purchase Sucessfull</h1>';
      }
  }






  if (isset($_SESSION['car_id'])) {

    $queryCarPurchase = "INSERT INTO bookings_cars
                            (	User_FK_ID	,Car_FK_ID,
                              Credit_Card	,Card_Name,
                              Card_Security_Code,	Card_Exp_Date,	Card_Shipping_Address,
                              Card_Billing_Address,	Card_PhoneNum)
                            VALUES ('$_SESSION[login_user]', '$_SESSION[car_id]',
                              \"'$_POST[cardNum]'\", \"'$_POST[nameOnCard]'\", '$_POST[securitycode]',
                              \"'$_POST[ExpiryDate]'\", \"'$_POST[CardAddress]'\",
                              \"'$_POST[BillingAddress]'\", \"'$_POST[PhoneNumber]'\" )";

    $rs = mysqli_query($r, $queryCarPurchase);
      if(!$rs){
        //echo "Could not execute query: $queryCarPurchase";
        echo '<h1><br>Car Rental Purchase Not Sucessfull</h1>';
        trigger_error(mysqli_error($r), E_USER_ERROR);
      }else {
          unset($_SESSION['car_id']);
          unset($_SESSION['Car_Price']);
          //echo "<br>Query: $queryCarPurchase executed\n";
          echo '<h1><br>Car Rental Purchase Sucessfull</h1>';
      }
  }


  if (isset($_SESSION['park_id'])) {

      $queryParkingPurchase = "INSERT INTO bookings_parking
                              (	User_FK_ID,	Park_FK_ID,
                                Credit_Card	,Card_Name,
                                Card_Security_Code,	Card_Exp_Date,	Card_Shipping_Address,
                                Card_Billing_Address,	Card_PhoneNum)
                              VALUES ('$_SESSION[login_user]', '$_SESSION[park_id]',
                                \"'$_POST[cardNum]'\", \"'$_POST[nameOnCard]'\", '$_POST[securitycode]',
                                \"'$_POST[ExpiryDate]'\", \"'$_POST[CardAddress]'\",
                                \"'$_POST[BillingAddress]'\", \"'$_POST[PhoneNumber]'\" )";

    $rs = mysqli_query($r, $queryParkingPurchase);
      if(!$rs){
        //echo "Could not execute query: $queryParkingPurchase";
        echo '<h1><br>Parking Purchase Not Sucessfull</h1>';
        trigger_error(mysqli_error($r), E_USER_ERROR);
      }else {
          unset($_SESSION['park_id']);
          unset($_SESSION['Parking_Price']);
          //echo "<br>Query: $queryParkingPurchase executed\n";
          echo '<h1><br>Parking Purchase Sucessfull</h1>';
      }
  }





  mysqli_close($r);

  ?>



</body>


</html>
