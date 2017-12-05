<html>

<head>
  <link rel="stylesheet" href="booking.css" type="text/css">
</head>

<body>
  <?php
    session_start();

    //Check if the Uesr is Logged In
    if(isset($_SESSION['login_user'])){

          if(isset($_POST['flight_number']) && !empty($_POST['flight_number']) ){
            $_SESSION['flight_number'] = $_POST['flight_number'];
            //echo 'Flight Number Selected is:'. $_SESSION['flight_number'].'<br>';
          }

          if(isset($_POST['car_id'])  && !empty($_POST['car_id'])){
            $_SESSION['car_id'] = $_POST['car_id'];
            //echo 'Car Number Selected is:'. $_SESSION['car_id'].'<br>';
          }

          if (isset($_POST['park_id']) && !empty($_POST['park_id']) ) {
            $_SESSION['park_id'] = $_POST['park_id'];
            //echo 'Parking Number Selected is:'. $_SESSION['park_id'].'<br>';
          }


          //echo "<h2>Your Old Values: <br></h2>";
          if(isset($_SESSION['flight_number'])){
            //echo 'Flight Number Selected is:'. $_SESSION['flight_number'].'<br>';
            include 'MyCart_Flight.php' ;
          }
          if(isset($_SESSION['car_id'])  ){
            //  echo 'Car Number Selected is:'. $_SESSION['car_id'].'<br>';
              include 'MyCart_Car.php' ;
          }
          if (isset($_SESSION['park_id']) ) {
            //echo 'Parking Number Selected is:'. $_SESSION['park_id'].'<br>';
            include 'MyCart_Parking.php' ;
          }

          echo '<form action="Remove_Flight.php" >
                  <button type="submit" > Remove Flight</button>
                </form>';

          echo '<form action="Remove_Car.php" >
                   <button type="submit" > Remove Car</button>
                </form>';

          echo '<form action="Remove_Parking.php" >
                  <button type="submit" > Remove Parking</button>
                </form>';

          echo '<form action="CheckOut.php" >
                        <button type="submit" > Check Out</button>
                </form>';




    }else {
      echo "<h1>!!! Not Logged In Log In!!!!</h1>";
    }

    echo '<form action="Booking.php" >
                  <button type="submit" > Home Page </button>
          </form>'     ; 

   ?>

</body>

</html>
