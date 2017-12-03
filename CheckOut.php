<html>

<head>
  <link rel="stylesheet" href="booking.css" type="text/css">
</head>

<body>
  <?php
    session_start();

    //Check if the Uesr is Logged In
    if(isset($_SESSION['login_user'])){


          $flight_price =0;
          $car_price = 0;
          $park_price = 0;

          $_SESSION['User_Total'] = 0;

          if(isset($_SESSION['flight_number'])){
            echo 'Flight Number Selected is:'. $_SESSION['flight_number'].'<br>';
            include 'MyCart_Flight.php' ;
            //$flight_price = $_SESSION['Flight_Price'];

          }
          if(isset($_SESSION['car_id'])  ){
              echo 'Car Number Selected is:'. $_SESSION['car_id'].'<br>';
              include 'MyCart_Car.php' ;
              //$car_price = $_SESSION['Car_Price'];
          }
          if (isset($_SESSION['park_id']) ) {
            echo 'Parking Number Selected is:'. $_SESSION['park_id'].'<br>';
            include 'MyCart_Parking.php' ;
            //$park_price = $_SESSION['Parking_Price'];
          }


          //Calculating Total
          if(isset($_SESSION['flight_number'])){
            $_SESSION['User_Total'] += intval($_SESSION['Flight_Price']);
          }if(isset($_SESSION['car_id'])){
            $_SESSION['User_Total'] += intval($_SESSION['Car_Price']);
          }if(isset($_SESSION['park_id'])){
            $_SESSION['User_Total'] += intval($_SESSION['Parking_Price']);
          }

          echo '<h1>Total Price: $'. $_SESSION['User_Total'] .'</h1>';

          include 'CheckOut_Form.php';

          echo '<form action="Remove_Flight.php" >
                  <button type="submit" > Return To Cart</button>
                </form>';





    }else {
      echo "<h1>!!! Not Logged In Log In!!!!</h1>";
    }



   ?>




</body>

</html>
